<template>
    <div class="m-5 profile-card" v-if="userInfo.tableFields[0].value != null">
        <ImgUpload :imgPath='imgPath'></ImgUpload>
        <div class="profile-row" :class="index == 0 ? 'mt-3' : ''" v-for="(property, index) in userInfo.tableFields" :key="property.id">
            <div class="col-3 profile-label">
                {{ property.label }}
            </div>
            <div class="col-8">
                <input :disabled="property.disabled" type="text" :id="property.id" :ref="property.id" @keypress.enter="updateField(property)" @keydown.esc="discardChange(property)" v-model="property.value">
            </div>
            <div class="col-1">
                <a :id="property.id + '_link'" class="edit-btn" href="#" @click="editField(property)">Edit</a>
            </div>
        </div>
        <div class="profile-row">
            <div class="col-3 profile-label">
                Email
            </div>
            <div class="col-8">
                {{ userInfo.userName }}
            </div>
        </div>
        <div class="profile-row">
            <div class="col-3 profile-label">
                Password
            </div>
            <div class="col-9">
                <a class="edit-btn" href="/pass">Change Password</a>
            </div>
        </div>
    </div>
    <div class="m-5 profile-card" v-else>
        <h2>
            Please log in to see this page!
        </h2>
    </div>
</template>

<script>
import axios from 'axios'
import ImgUpload from './img-upload/ImgUpload.vue'

export default {
    props: [ 'userJson' ],
    components: {
        ImgUpload
    },
    data() {
        return {
            userInfo: {
                tableFields: [
                    {id: 'fname', label: 'Full Name', value: null, url: '/profile/updatefullname', disabled: true},
                    {id: 'dname', label: 'Display Name', value: null, url: '/profile/updatedisplayname', disabled: true},
                    {id: 'location', label: 'Location', value: null, url: '/profile/updatelocation', disabled: true}
                ],
                userName: null,
                pictureFileName: null,
            }, //All plain text data returned by userJson
            buffer: null, //string buffer used for resetting entries on [esc]
        }
    },
    methods: {
        fieldDisable(property, state = false) {
            // activates/deactivates the field and returns the parameters to update the data into the db
            property.disabled = state
            return {
                method: 'post',
                url: property.url,
                data: property.value
            }
        },
        editField(property) {
            // makes the input field editable and selects the content
            Promise.resolve(this.userInfo.tableFields.forEach( input => {
                if (!input.disabled) {
                    this.fieldDisable(input, true)
                    input.value = this.buffer
                }
            })).then(() => {// ensure only one field is editable at a time
            Promise.resolve(this.fieldDisable(property)).then(() => {
                return Promise.resolve(
                    this.buffer = property.value,
                    this.$refs[property.id][0].select()
                )
            })})
        },
        updateField(property) {
            // changes the property in the database
            var axiosParameters = this.fieldDisable(property, true)
            axios(axiosParameters)
        },
        discardChange(property) {
            // reset the field and stop editing
            Promise.resolve(this.fieldDisable(property, true)).then(() => {
                return Promise.resolve(
                    this.$refs[property.id][0].value = this.buffer
                )
            })
            
        }
    },
    computed: {
        imgPath() {
            return "/usercontent/avatars/" + this.userInfo.pictureFileName
        }
    },
    created() {
        // fill userInfo
        if (this.userJson != null && this.userJson != "") {
            var tempJson = JSON.parse(this.userJson)
            this.userInfo.tableFields[0].value = tempJson.full_name
            this.userInfo.tableFields[1].value = tempJson.display_name
            this.userInfo.tableFields[2].value = tempJson.location
            this.userInfo.userName = tempJson.user_name
            this.userInfo.pictureFileName = tempJson.picture_file_name
        }
    }
}
</script>

<style>
    .profile-card {
        border: 1px solid #C4C4C4;
        padding: 1rem;
    }

    .profile-card-header {
        font-weight: 700;
    }

    .profile-row {
        border-top: 1px solid #C4C4C4;
        padding-top: 12px;
        padding-bottom: 12px;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .profile-row:hover {
        background-color: #5A98F2;
        color: white;
    }

    .profile-row a {
        text-decoration: none;
    }

    .profile-row:hover a {
        color: white;
    }

    .profile-row:hover input[type="text"]:disabled {
        color: white;
    }


    .profile-label {
        font-weight: 700;
    }

    .edit-center {
        padding-top: 0.75rem;
    }

    .edit-btn {
        text-decoration: none;
        /* padding: 8px 12px; */
    }

    .edit-btn:hover {
        cursor: pointer;
    }

    input[type="text"] {
        color: #4d4d4d;
        box-sizing: border-box;
        width: 100%;
    }

    input[type="text"]:disabled {
        border: none;
        background: transparent;
    }
</style>
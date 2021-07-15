<template>
    <div class="m-5 profile-card">
        <div class="row mt-3">
            <div class="col-auto">
                <img src="/images/profile-default.png" height="48">
            </div>
            <div class="col-auto edit-center">
                <!-- {# <a href="/profile/edit-picture">Edit profile picture</a> #} -->
                <i>Ability to edit picture coming soon</i>
            </div>
        </div>
        <div class="profile-row mt-3">
            <div class="col-3 profile-label">
                Full Name
            </div>
            <div class="col-8">
                <!-- CR-Q Alternatively, I could go up the DOM from the Edit and down again, but i prefer this readability wise -->
                <input :disabled="fNameDisable" type="text" id="fname" ref="fname" @keypress.enter="updateField" @keydown.esc="discardChange" v-model="userInfo.full_name">
            </div>
            <div class="col-1">
                <a class="edit-btn" @click="editField('fname')">Edit</a>
            </div>
        </div>
        <div class="profile-row">
            <div class="col-3 profile-label">
                Display Name
            </div>
            <div class="col-8">
                <input :disabled="dNameDisable" type="text" id="dname" ref="dname" @keypress.enter="updateField" @keydown.esc="discardChange" v-model="userInfo.display_name">
            </div>
            <div class="col-1">
                <a class="edit-btn" @click="editField('dname')">Edit</a>
            </div>
        </div>
        <div class="profile-row">
            <div class="col-3 profile-label">
                Location
            </div>
            <div class="col-8">
                <input :disabled="locationDisable" type="text" id="location" ref="location" @keypress.enter="updateField" @keydown.esc="discardChange" v-model="userInfo.location">
            </div>
            <div class="col-1">
                <a class="edit-btn" @click="editField('location')">Edit</a>
            </div>
        </div>
        <div class="profile-row">
            <div class="col-3 profile-label">
                Email
            </div>
            <div class="col-8">
                {{ userInfo.user_name }}
            </div>
        </div>
        <div class="profile-row">
            <div class="col-3 profile-label">
                Password
            </div>
            <div class="col-8">
                <a class="btn orange" href="/pass">Change Password</a>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    props: [ 'userJson' ],
    data() {
        return {
            userInfo: null,
            buffer: null,
            fNameDisable: true,
            dNameDisable: true,
            locationDisable: true,
        }
    },
    methods: {
        fieldDisable(fieldName, state = false) {
            switch (fieldName) {
                case 'fname':
                    this.fNameDisable = state
                    return {
                        method: 'post',
                        url: '/profile/updatefullname',
                        data: this.userInfo.full_name
                    }
                case 'dname':
                    this.dNameDisable = state
                    return {
                        method: 'post',
                        url: '/profile/updatedisplayname',
                        data: this.userInfo.display_name
                    }
                case 'location':
                    this.locationDisable = state
                    return {
                        method: 'post',
                        url: '/profile/updatelocation',
                        data: this.userInfo.location
                    }
                default:
                    console.log('Field Name not found: ' + fieldName)
                    return {}
            }
        },
        editField(fieldName) {
            Promise.resolve(this.fieldDisable(fieldName)).then(() => {
                return Promise.resolve(
                    this.buffer = this.$refs[fieldName].value,
                    this.$refs[fieldName].select()
                    )
            })
        },
        updateField(event) {
            var axiosParameters = this.fieldDisable(event.target.attributes.id.value, true)
            axios(axiosParameters).then(resp => {
                console.log(resp)
            })
        },
        discardChange(event) {
            Promise.resolve(this.fieldDisable(event.target.attributes.id.value, true)).then(() => {
                return Promise.resolve(
                    console.log(event.target.attributes.id.value),
                    this.$refs[event.target.attributes.id.value].value = this.buffer //CR Q How to do this better? This breaks as soon as id != ref
                )
            })
            
        }
    },
    created() {
        this.userInfo = JSON.parse(this.userJson)
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
        background-color: #5A98F2;
        border:1px solid #FFFFFF;
    }


    .profile-label {
        font-weight: 700;
    }

    .edit-center {
        padding-top: 0.75rem;
    }

    .edit-btn {
        text-decoration: none;
        background-color: #FFFFFF;
        border:1px solid #458FF6;
        border-radius: 5px;
        padding: 8px 12px;
    }

    .edit-btn:hover {
        cursor: pointer;
    }

    input[type="text"] {
        box-sizing: border-box;
        width: 100%;
    }

    input[type="text"]:disabled {
        border: none;
        background: transparent;
    }
</style>
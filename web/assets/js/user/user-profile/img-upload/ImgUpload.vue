<!-- https://www.digitalocean.com/community/tutorials/how-to-handle-file-uploads-in-vue-2 -->
<template>
    <div class="row mt-3">
        <div class="col-2">
            <img :src="imgPath" height="48">
        </div>
        <div class="col-6">

        </div>
        <div class="col-4 edit-center">
            <div class="file-upload">
                <input type="file" name="profile_image" :disabled="isSaving" @change="filesChange($event.target.files)"
                    accept="image/*" class="input-file">
                <p v-if="isInitial">
                    Click to change image
                </p>
                <p v-if="isSaving">
                    Uploading files...
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

    const STATUS_INITIAL = 0, STATUS_SAVING = 1, STATUS_SUCCESS = 2, STATUS_FAILED = 3

    export default {
        id: 'ImgUpload',
        props: ['imgPath'],
        data() {
            return {
                uploadedFile: '',
                uploadError: null,
                currentStatus: null,
                formData: null,
                res: null
            }
        },
        computed: {
            isInitial() {
                return this.currentStatus === STATUS_INITIAL
            },
            isSaving() {
                return this.currentStatus === STATUS_SAVING
            },
            isSuccess() {
                return this.currentStatus === STATUS_SUCCESS
            },
            isFailed() {
                return this.currentStatus === STATUS_FAILED
            }
        },
        methods: {
            reset() {
                // reset from to initial state
                this.currentStatus = STATUS_INITIAL
                this.uploadedFile = []
                this.uploadError = null
            },
            save(formData) {
                // upload data to the server
                this.currentStatus = STATUS_SAVING
                // https://stackoverflow.com/questions/43013858/how-to-post-a-file-from-a-form-with-axios
                axios({
                    method: "post",
                    url: '/profile/uploadimage',
                    data: formData,
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })                
                .then( res => {
                    this.res = res
                    this.currentStatus = STATUS_INITIAL
                }).catch( err => {
                    this.uploadError = err.response
                    this.currentStatus = STATUS_FAILED
                })

            },
            filesChange(fileList) {
                // handle file changes

                if (!fileList.length) return //no files
                
                // append the files to FormData
                var formData = new FormData()
                formData.append('profile_image', fileList[0])

                // save it
                this.save(formData)
            }
        },
        mounted() {
            this.reset()
        }
    }

</script>

<style>
/* CRTD Design is still up for debate. I made it look like this, because it's easy enoguh and doesn't look horrible. */
    .file-upload {
        background: #5A98F2;
        color: rgb(255, 255, 255);
        position: relative;
        cursor: pointer;
        border-radius: 10px;
    }

    .input-file {
        opacity: 0; /* invisible but it's there! */
        position: absolute;
        cursor: pointer;
        width: 100%;
    }

    .file-upload:hover {
        background: rgb(255, 255, 255); /* when mouse over to the drop zone, change color */
        color: #5A98F2;
    }

    .file-upload p {
        font-size: 1.2em;
        text-align: center;
        padding: 1px 0;
    }
</style>
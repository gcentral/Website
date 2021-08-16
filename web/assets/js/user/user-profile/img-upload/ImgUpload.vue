<!-- https://www.digitalocean.com/community/tutorials/how-to-handle-file-uploads-in-vue-2 -->
<template>
    <div>
        <form enctype="multipart/form-data" novalidate v-if="isInitial || isSaving">
            <h1>Upload images</h1>
            <div class="dropbox">
                <input type="file" name="profile_image" :disabled="isSaving" @change="filesChange($event.target.files)"
                    accept="image/*" class="input-file">
                    <p v-if="isInitial">
                        Drag your file(s) here to begin<br>
                        or click to browse
                    </p>
                    <p v-if="isSaving">
                        Uploading files...
                    </p>
            </div>
        </form>
    </div>
</template>

<script>
    import axios from 'axios'

    const STATUS_INITIAL = 0, STATUS_SAVING = 1, STATUS_SUCCESS = 2, STATUS_FAILED = 3

    export default {
        id: 'ImgUpload',
        props: ['userName'],
        data() {
            return {
                uploadedFile: '',
                uploadError: null,
                currentStatus: null,
                formData: null
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
                axios.post('/profile/uploadimage', formData,{
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })                
                .then( res => {
                    console.log(res)
                }).catch( err => {
                    console.log('axios error')
                    console.log(err.response.data.detail)
                    this.uploadError = err.response
                    this.currentStatus = STATUS_FAILED
                })
            },
            filesChange(fileList) {
                // handle file changes

                if (!fileList.length) return
                console.log(fileList)
                // append the files to FormData

                var file = {
                    userName: this.userName,
                    fileName: fileList[0].name,
                    file:     fileList[0]
                }

                var formData = new FormData()

                formData.append('profile_image', fileList[0])
                this.formData = formData
                console.log(formData)

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
    .dropbox {
        outline: 2px dashed grey; /* the dash box */
        outline-offset: -10px;
        background: lightcyan;
        color: dimgray;
        padding: 10px 10px;
        min-height: 200px; /* minimum height */
        position: relative;
        cursor: pointer;
    }

    .input-file {
        opacity: 0; /* invisible but it's there! */
        width: 100%;
        height: 200px;
        position: absolute;
        cursor: pointer;
    }

    .dropbox:hover {
        background: lightblue; /* when mouse over to the drop zone, change color */
    }

    .dropbox p {
        font-size: 1.2em;
        text-align: center;
        padding: 50px 0;
    }
</style>
<template>
    <div class="container">
        <textarea name="package_json" ref="json" class="w-100" />
        <br><br>
        <button class="btn btn-primary" @click="postUpdate">Update</button>
    </div>
</template>

<style scoped>
</style>

<script>
import axios from 'axios';

export default {
    id: 'Importer',
    data() {
        return {};
    },
    methods: {
        postUpdate() {
            axios.post('/api/packages/ingest', this.$refs.json.value)
                .then(function(res) {
                    console.log(res.data);
                }.bind(this))

                .catch(function(err) {
                    console.log(err);
                }.bind(this));
        }
    }
}
</script>
<template>
    <div>
        <select name="version" id="version" class="VerDD" v-model="selected_version">
            <option v-for="version in versions" :key="version.id" :value="version">{{ version.version }}</option>
        </select>
    </div>
</template>

<script>
export default {
    id: 'VersionDD',
    props: [ 'package' ],
    data() {
        return {
            versions: [],
            selected_version:  null
        }
    },
    computed: {},
    mounted() {
        var package_obj = JSON.parse(this.package)
        this.versions = package_obj.versions
        this.selected_version = package_obj.versions[package_obj.versions.length - 1]
    }
}
</script>

<style>
.VerDD {
    background: #FFFFFF;
    border: 1px solid #979797;
    box-sizing: border-box;
    border-radius: 5px;
}
</style>
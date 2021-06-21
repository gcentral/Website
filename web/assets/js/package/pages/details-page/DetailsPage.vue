<template>
    <div>
        <VersionDD v-if="pkg_obj.versions" :vrs="pkg_obj.versions"></VersionDD>
        <div class="clear"></div>
        <InstallPkg :name="pkg_obj.name"></InstallPkg>
    </div>
</template>

<script>
import VersionDD from '../../components/version-dd/VersionDD'
import InstallPkg from '../../components/install-pkg/InstallPkg'

export default {
    components: {
        VersionDD,
        InstallPkg
    },
    props: [ 'pkg' ],
    data() {
        return {
            pkg_obj: {}
        }
    },
    mounted() {
        this.pkg_obj = JSON.parse(this.pkg)
    }
}
</script>

<style>
    .clear {
        float: clear;
    }
</style>
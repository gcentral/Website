<template>
    <div class="row mt-med">
        <div class="col-12 col-md-9">
            <div class="pkg-name">
                <img :src="type_icon_path" class="repo-type">
                {{ pkg_obj.display_name }}
            </div>
            <div class="pkg-devs" v-for="developer in pkg_obj.developers" :key="developer.id">
                by
                <a v-if="developer.personal_user == null" :href="'/group/' + developer.id">{{ developer.name }}</a>
                <a v-else :href="'/user/' + developer.personal_user.id">{{ developer.display_name }}</a>
            </div>
            <div class="pkg-rating" v-if="pkg_obj.avg_rating >=0">
                Rating: {{ pkg_obj.avg_rating }}<br>
            </div>
            <div v-else>
                No ratings yet
            </div>
            <VersionDD v-if="pkg_obj.versions" :vrs="pkg_obj.versions" @selection_changed='selection_changed'></VersionDD>
            <div class="clear"></div>
            <InstallPkg :name="pkg_obj.name"></InstallPkg>
        </div>
        <div class="col-12 col-md-3"></div>
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
            pkg_obj: {},
            type_icon_path: null
        }
    },
    mounted() {
        this.pkg_obj = JSON.parse(this.pkg)
    },
    methods: {
        selection_changed(repo_type) {
            if (repo_type == 'GPM') {
                this.type_icon_path = "/images/partners/gpm.png"
            } else if (repo_type == 'VIPM') {
                this.type_icon_path = "/images/partners/vipm.png"
            }
        }
    }
}
</script>

<style>
    .pkg-name {
        font-size: 36px;
    }

    .clear {
        float: clear;
    }
    
    .repo-type {
        height: 2rem;
    }
</style>
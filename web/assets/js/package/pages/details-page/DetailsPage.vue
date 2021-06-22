<template>
    <div class="container">
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
        <div class="row mt-med">
            <div class="col-12 col-md-9 pr-5">
                <div class="pkg-desc-label">Description</div>
                <div class="pkg-desc mt-3">
                    <pre>{{ pkg_obj.description }}</pre>
                </div>
                <div class="mt-med pkg-desc-label">Release Notes</div>
                <div class="pkg-notes mt-3">
                    <pre>
                        {{ release_notes }}
                    </pre>
                </div>
            </div>
            
            <div class="col-12 col-md-3 pkg-extra">
                <div class="pkg-ex-label">Downloads</div>
                {{ pkg_obj.downloads }}
                <div class="pkg-ex-label mt-4">Categories</div>
                &nbsp;
                <div class="pkg-ex-label mt-4">Tags</div>
                &nbsp;
                <div class="pkg-ex-label mt-4">Release date</div>
                <div v-if="selected_version">{{ release_date }}</div>
                <div class="pkg-ex-label mt-4">Version history</div>
                <div class= "pkg-ex-version mt-3" :class="{ 'vrs-highlight': version === selected_version }" v-for="version in pkg_obj.versions" :key="version.id">{{ version.version }}</div>
            </div>
        </div>
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
            type_icon_path: null,
            release_notes: null,
            release_date: null,
            selected_version: null
        }
    },
    mounted() {
        this.pkg_obj = JSON.parse(this.pkg)
    },
    methods: {
        selection_changed(repo_type, release_notes, selected_version) {
            this.release_notes = release_notes
            this.selected_version = selected_version
            var dte = new Date(selected_version.release_date)
            this.release_date = `${dte.getFullYear()}-${dte.getMonth() + 1}-${dte.getDate()}`
            if (selected_version.repo_type == 'GPM') {
                this.type_icon_path = "/images/partners/gpm.png"
            } else if (selected_version.repo_type == 'VIPM') {
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

    .pkg-desc-label {
        font-size: 24px;
        font-weight: bold;
    }

    .pkg-notes pre {
        white-space: pre-wrap;
        word-wrap: break-word;
        max-height: 300px;
        overflow-y: auto;
        border: 1px solid #c4c4c4;   
    }

    .pkg-desc pre {
        white-space: pre-wrap;
        word-wrap: break-word;
        font-family: "Mulish";  
    }

    .pkg-install button {
        border: 0px;
        border-radius: 0.25rem;
        padding: 0.5rem 3rem;
    }

    .pkg-extra {
        border-left: 2px solid #C4C4C4;
    }

    .pkg-ex-label {
        font-weight: bold;
        font-size: 16px;
        margin-bottom: 1rem;
    }

</style>
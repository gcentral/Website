<template>
    <div>
        <div class="mt-5 clearfix">
            <span class="pkg-version">
                <select name="version" id="version" class="VerDD" v-model="selected_version">
                    <option v-for="version in pkg_obj.versions" :key="version.id" :value="version">{{ version.version }}</option>
                </select>
            </span>
            <span class="pkg-notify">
                <img src="/images/bell.png">
            </span>
        </div>
        <div class="clear"></div>
        <div class="pkg-install mt-3">
            <div v-if="gpm_install" class="">
                    Install with:<br>
                    <input class="gpm-install" id="gpm_install" :value="gpm_install" :size="gpm_install.length" readonly>
                    <a id="gpm_copy">
                        <img class="cmd-copy" src="/images/copy.png" @click="copy_to_clipboard">
                    </a>
            </div>
            <div v-else-if="vipm_install" class="">
                <a class="btn orange" :href="vipm_install">Download</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    id: 'VersionDD',
    props: [ 'pkg' ],
    data() {
        return {
            pkg_obj: {},
            selected_version: null
        }
    },
    computed: {
        gpm_install() {
            if (this.selected_version) {
                console.log('called')
                if (this.selected_version.repo_type == 'GPM') {
                    console.log('found')
                    return 'gpm install ' + this.pkg_obj.name + '^' + this.selected_version.version
                }
            }
            console.log('return')
            return null
        },
        vipm_install() {
            if (this.selected_version) {
                if (this.selected_version.repo_type == 'VIPM') {
                    return selected_version.PackageUrl
                }
            }
            return null
        }
    },
    methods: {
        copy_to_clipboard() {
            if (gpm_install) {
                document.getElementById('gpm_install').select()
                document.execCommand("copy")
                window.getSelection().removeAllRanges()
            }
        }
    },
    mounted() {
        this.pkg_obj = JSON.parse(this.pkg)
        this.selected_version = this.pkg_obj.versions[this.pkg_obj.versions.length - 1]
    }
}
</script>

<style>
    .gpm-install {
        font-family: monospace;
        padding: 0.25rem;
        border-radius: 0.25rem;
        background-color: #eee;
        padding: 10px 30px 10px 10px;
        width: 100;
        outline: none;
        border: 0;
    }

    .clear {
        float: clear;
    }

    #gpm_copy {
        position: relative;
        left: -30px;
        height: 28px;
    }

    #gpm_copy:active {
        background-color: rgba(200, 150, 90, 0.4);
    }

    .pkg-version {
        font-size: 20px;
        float: left;
    }

    .pkg-notify {
        float: left;
        margin-left: 50px;
    }

    .VerDD {
        background: #FFFFFF;
        border: 1px solid #979797;
        box-sizing: border-box;
        border-radius: 5px;
    }
</style>
<template>
    <div class="pkg-install mt-3">
        <div v-if="gpm_install" class="">
                Install with:<br>
                <input class="gpm-install" id="gpm_install" :value="gpm_install" :size="gpm_install.length" readonly>
                <a id="gpm_copy">
                    <img class="cmd-copy" src="/images/copy.png" @click="copy_to_clipboard">
                </a>
        </div>
        <div v-else-if="url" class="">
            <a class="btn orange" :href="url">Download</a>
        </div>
    </div>
</template>

<script>
export default {
    id: 'VersionDD',
    props: [ 'name' ],
    data() {
        return {
            version: null,
            url: null
        }
    },
    computed: {
        gpm_install() {
            if (this.version) {
                return 'gpm install ' + this.name + '^' + this.version
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
        this.$root.$on('gpm_update', data => {
            this.version = data
        })
        this.$root.$on('vipm_update', data => {
            this.url = data
        })
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

    #gpm_copy {
        position: relative;
        left: -30px;
        height: 28px;
    }

    #gpm_copy:active {
        background-color: rgba(200, 150, 90, 0.4);
    }
</style>
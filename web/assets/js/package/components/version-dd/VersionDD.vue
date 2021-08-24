<template>
    <div class="mt-5 clearfix">
        <span class="pkg-version">
            <select name="version" id="version" @change="selection_change" class="VerDD" v-model="selected_version">
                <option v-for="version in vrs" :key="version.id" :value="version">Version {{ version.version }}</option>
            </select>
        </span>
        <span class="pkg-notify">
            <img src="/images/bell.png">
        </span>
    </div>
</template>

<script>
export default {
    id: 'VersionDD',
    props: [ 'vrs', 'slctd_vrs' ],
    data() {
        return {
            selected_version: null
        }
    },
    methods: {
        update_install_component() {
            if (this.selected_version.repo_type == 'GPM') {
                this.$root.$emit('gpm_update', this.selected_version.version)
            } else if (this.selected_version.repo_type == 'vipm'){
                this.$root.$emit('vipm_update', this.selected_version.package_url)
            }
        },
        selection_change() {
            this.$emit('selection_changed', this.selected_version)
            this.update_install_component()
        }
    },
    mounted: function() {
        this.selected_version = this.vrs[this.vrs.length - 1]
        this.selection_change()
    },
    watch: {
        slctd_vrs: function() {
            this.selected_version = this.slctd_vrs
            this.update_install_component()
        }
    },
}
</script>

<style>
    .pkg-version {
        font-size: 24px;
        display: inline-block;
        vertical-align: middle;
    }

    .pkg-notify {
        margin-left: 40px;
        display: inline-block;
        vertical-align: middle;
    }

    .VerDD {
        font-family: inherit;
        font-size: inherit;
        border: none;
        outline: none;
    }
</style>
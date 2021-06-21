<template>
    <div class="mt-5 clearfix">
        <span class="pkg-version">
            <select name="version" id="version" @change="selection_change" class="VerDD" v-model="selected_version">
                <option v-for="version in vrs" :key="version.id" :value="version">{{ version.version }}</option>
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
    props: [ 'vrs' ],
    data() {
        return {
            selected_version: null
        }
    },
    methods: {
        selection_change() {
            this.$emit('selection_changed', this.selected_version.repo_type)
            if (this.selected_version.repo_type == 'GPM') {
                this.$root.$emit('gpm_update', this.selected_version.version)
            } else if (this.selected_version.repo_type == 'VIPM'){
                this.$root.$emit('vipm_update', this.selected_version.package_url)
            }
        }
    },
    mounted: function() {
        this.selected_version = this.vrs[this.vrs.length - 1]
        this.selection_change()
    }
}
</script>

<style>
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
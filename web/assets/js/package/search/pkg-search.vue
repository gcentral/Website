<template>
    <div class="search-input">
        <img class="search-icon" src="/images/search.png">
        <input type="text" name="q" id="package_search" placeholder="Search for Packages" class="form-control pl-5" ref="search" @keyup.enter="startSearch">
    </div>
</template>

<style scoped>
    .search-icon {
        position: absolute;
        max-width: 30px;
        margin-top: 4px;
        margin-left: 4px;
        z-index: 10;
        display: block;
    }
</style>

<script>
function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

export default {
    id: 'PkgSearch',
    data() {
        return {};
    },
    mounted() {
        var q = getParameterByName('q');
        if (q != null) {
            this.$refs.search.value = q;
        }
    },
    methods: {
        startSearch() {
            var q = encodeURIComponent(this.$refs.search.value);
            var url = '/packages?q=' + q.replace('%20', '+');
            window.location.href = url;
        }
    }
}
</script>
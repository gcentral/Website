<template>
    <div class="gc-collapse">
        <div class="gc-collapse-header" @click="toggleVis">
            <h5>
                <a class="gc-collapse-link">
                    <slot name="title"></slot>
                </a>
                <img :src="toggleUrl" class="gc-collapse-toggle">
            </h5>
        </div>
        <div class="gc-collapse-body" v-show="visible">
            <slot name="body"></slot>
        </div>
    </div>
</template>

<style scoped>

.gc-collapse {
    margin-top: 1rem;
}

.gc-collapse-toggle {
    float: right;
}

.gc-collapse-header {
    border-bottom: 1px solid #C4C4C4;
    cursor: pointer;
    padding: 5px;
}

.gc-collapse-header:hover {
    background-color: #C4C4C4;
}

.gc-collapse-link {
    text-decoration: none;
    color: #4D4D4D;
}

.gc-collapse-body {
    padding: 1rem 5px 2rem 5px;
}

</style>

<script>
export default {
    id: "Collapse",
    data () {
        return {
            visible: false
        };
    },
    props: [
    ],
    computed: {
        toggleUrl() {
            if (this.visible) {
                return "/images/toggle-up.png";
            } else {
                return "/images/toggle-down.png";
            }
        }
    },
    methods: {
        toggleVis() {
            this.visible = !this.visible;
        }
    }
}
</script>
<template>
    <div class="password-group">
        <input :type="type" :name="name" :id="id" class="form-control" placeholder="Password" required>
        <img src="/images/eye.png" @click="toggleVis">
    </div>
</template>

<style scoped>
.password-group {
    position: relative;
    width: 100%;
}

.password-group input {
    position: relative;
}

.password-group img {
    position: absolute;
    right: 0.5rem;
    top: 0.25rem;
    cursor: pointer;
}
</style>

<script>
export default {
    id: "Password",
    data () {
        return {
            visible: false
        };
    },
    props: [
        'name',
        'id',
    ],
    computed: {
        type() {
            return this.visible ? "text" : "password";
        }
    },
    methods: {
        toggleVis() {
            this.visible = !this.visible;
        }
    }
}
</script>
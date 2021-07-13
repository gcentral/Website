<template>
    <div class="m-5 profile-card">
        <div class="row mt-3">
            <div class="col-auto">
                <img src="/images/profile-default.png" height="48">
            </div>
            <div class="col-auto edit-center">
                <!-- {# <a href="/profile/edit-picture">Edit profile picture</a> #} -->
                <i>Ability to edit picture coming soon</i>
            </div>
        </div>
        <div class="profile-row mt-3">
            <div class="col-3 profile-label">
                Full Name
            </div>
            <div class="col-8">
                <input :disabled="fnameDisable" type="text" id="fname" name="fname" @keypress.enter="updateFullName" v-model="userInfo.full_name">
            </div>
            <div class="col-1">
                <a @click="editFullName">Edit</a>
            </div>
        </div>
        <div class="profile-row">
            <div class="col-3 profile-label">
                Display Name
            </div>
            <div class="col-8">
                {{ userInfo.display_name}}
            </div>
            <div class="col-1">
                <a href="#">Edit</a>
            </div>
        </div>
        <div class="profile-row">
            <div class="col-3 profile-label">
                Location
            </div>
            <div class="col-8">
                {{ userInfo.location }}
            </div>
            <div class="col-1">
                <a href="#">Edit</a>
            </div>
        </div>
        <div class="profile-row">
            <div class="col-3 profile-label">
                Email
            </div>
            <div class="col-8">
                {{ userInfo.user_name }}
            </div>
        </div>
        <div class="profile-row">
            <div class="col-3 profile-label">
                Password
            </div>
            <div class="col-8">
                <a class="btn orange" href="/pass">Change Password</a>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    props: [ 'userJson' ],
    data() {
        return {
            userInfo: null,
            fnameDisable: true
        }
    },
    methods: {
        editFullName() {
            this.fnameDisable = false
        },
        updateFullName() {
            this.fnameDisable = true
            axios({
                method: 'post',
                url: '/profile/updatefullname',
                data: this.userInfo.full_name
            }).then(resp => {
                console.log(resp)
            })
        }
    },
    created() {
        this.userInfo = JSON.parse(this.userJson)
    }
}
</script>

<style>
    .profile-card {
        border: 1px solid #C4C4C4;
        padding: 1rem;
    }

    .profile-card-header {
        font-weight: 700;
    }

    .profile-row {
        border-top: 1px solid #C4C4C4;
        padding-top: 12px;
        padding-bottom: 12px;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .profile-row:hover {
        background-color: #5A98F2;
        color: white;
    }

    .profile-row a {
        text-decoration: none;
    }

    .profile-row:hover a {
        color: white;
        text-decoration: underline;
        cursor: pointer;
    }

    .profile-label {
        font-weight: 700;
    }

    .edit-center {
        padding-top: 0.75rem;
    }

    input[type="text"] {
        box-sizing: border-box;
        width: 100%;
    }

    input[type="text"]:disabled {
        border: none;
        background: transparent;
    }
</style>
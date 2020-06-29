<template>
    <b-navbar :spaced="true" :shadow="true" :fixed-top="true">
        <template slot="brand">
            <b-navbar-item tag="router-link" :to="{ name: 'home' }">
                <img class="logo"
                    src="./../assets/images/wheelz-logo.png"
                    alt="Wheelz Logo"
                >
            </b-navbar-item>
        </template>
        <template slot="end">
            <b-navbar-item tag="div">
                <div class="buttons">
                    <a class="button is-light" href="https://www.codesoftware.me" target="_blank">
                        Code Software
                    </a>
                    <a class="button is-primary" href="https://www.linkedin.com/in/lucashcruzcosta/" target="_blank">
                        <strong>Sobre Mim</strong>
                    </a>
                </div>
            </b-navbar-item>
        </template>
    </b-navbar>
</template>

<script>
export default {

}
</script>

<style>
    .logo {
        max-height: 2.75rem !important;
    }
</style>
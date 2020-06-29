<template>
  <div id="app">
    <Navbar />
    <div>
      <router-view />
    </div>
    <Footer />
  </div>
</template>

<script>
  import Navbar from './components/Navbar';
  import Footer from './components/Footer';

  export default {
    name: 'App',
    components: {
      Navbar, 
      Footer
    }
  }
</script>

<style>
#app {
  font-family: 'Nunito', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
.primary-text {
  color: #7957d5;
}
</style>

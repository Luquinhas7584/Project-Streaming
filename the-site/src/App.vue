<template>
    <div id="app">
        Bem vindo
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "App",
    components: {

    },
    data: () => ({
      drawer:false,
      items: [
        { title: "Filmes",
      }
      ]
    })
}
</script>

<style>


</style>

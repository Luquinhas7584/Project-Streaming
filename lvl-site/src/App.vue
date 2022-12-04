<template>
   <div>
    <h1 class="nav">Naveg</h1>
    <h2>My name is: {{ Nome }}</h2>
   </div>
</template>
  
<script>
export default{
    name:"Nav-Bar",
    data(){
        return{
            Nome:"Lucas"
        }
    }
}
</script>
  
<style>
    .nav{
        color: blue;
    }
</style>
  
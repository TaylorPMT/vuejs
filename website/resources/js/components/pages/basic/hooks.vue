<template>
    <div>
        <h1 ref="myref" >Hooks tutorial</h1>
        <p>
            My name {{name}}
        </p>
    </div>
</template>
<script>
export default {
    data(){
        return {
            name: "Hooks"
        }
    },
    beforeCreate() {
        console.log(this.name);
    },
    created(){
      //call mostly inital data from it
        console.log('data and other functions is available but not html',this.name);
    },
    mounted() {
        console.log(this.$refs.myref);
    }
}
</script>

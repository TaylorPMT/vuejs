<template>
    <div>
        <h1>
            <h1>we can have some data here {{counters}}</h1>
            <button @click="updateNumber(1)">Cộng </button>
            <button @click="updateNumberTru(1)">Trừ</button>
            <br>
            <div v-for="(blog,i) in blogs":key="i" v-if="blogs.length">
                    <h1>{{blog.title}} </h1>
                    <p>{{blog.post}} {{blog.id}}</p>
            </div>

        </h1>
        <br>
        <div>
            <h1 v-if="showItems">show is item if</h1>
        </div>
            <button @click="changShowItem()">{{showItems == true ? "Show":"None"}}</button>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                counters : 0,
                blogs:[

                ],
                showItems :false,
            }
        },
        methods:{
            updateNumber(number){
                this.counters+=number
            },
            updateNumberTru(number)
            {
                this.counters-=number;
            },
            changShowItem()
            {
                this.showItems=!this.showItems;
            },
        },
        created(){
            this.counters=100;
            //call serve get
            let posts=[
                {titles :'this is ','post':'this is the log post',id:1},
                {titles :'this is ','post':'this is the log post',id:2},
                {titles :'this is ','post':'this is the log post',id:3}
            ];
            this.blogs=posts;
        }
    }
</script>

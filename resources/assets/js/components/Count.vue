<template>
 <div>
     <div>{{this.notices.length}}</div>
 </div>
</template>

<script>
export default {
        data(){
            return{
                notices:[],
                timer:''

            }
        },
         created() {
           this.fetchData()
          this.timer = setInterval(this.fetchData , 1000)
        },
        methods:{
              
              
              fetchData(){
                 axios.get('datas').then((res)=>{
                     this.notices = res.data,
                     console.log(this.notices)
                 })
                 .catch((err)=>
                 {
                     console.log(err)
                 })
             },
             show(noty)
             {
                 axios.get(`blags.show/${noty.data['id']}`)
                  .then((res)=>{
                      console.log(res.data)
                  })
             },
              cancelAutoUpdate: function() { clearInterval(this.timer) },
             beforeDestroy() {
             clearInterval(this.timer)
             }
        }  
}
</script>

<template>
  <div>
      <div v-for="notice in notices" :key="notice.id">
          {{notice.id}}
      </div>
  </div>
</template>
<script>
export default {
        data(){
            return{
                notices:[],
                notice_id:'',
                timer:''

            }
        },
         mounted() {
           this.fetchData()
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
             }
        }  
}
</script>

<template>

   <div class="form-inline form-group mt-1">
                    <div class="col-md-4">
                      <select class="form-control" name="category_id" v-model="category">
                        <option value=""> choose category</option>
                        <option
                    v-for="data in categories"
                    :value="data.id"
                    :key="data.id"
                >
                    {{ data.name }}
                </option>

                                
                        </select>                                
                 </div>
    </div>


</template>


<script>
export default{

                data(){
                    return{ 
                          category: 0,
                          categories: []      
                    }
                },
                mounted(){
                        this.getCategories();

                },

                methods:{
                        getCategories() {
                                        axios.get("/api/category").then(response =>{
                                         this.categories = response.data               

                                        }).bind(this)



                        }


                },


}

</script>
<template>
    <div class="container">    
            <button class="btn-pay"
                v-on:click.prevent="addProductToCart()">
                Add to cart</button>      
    </div>
</template>

<script>
import { assertExpressionStatement } from '@babel/types';

    export default {
        data(){

        },
        props:['productId', 'userId'],

        // methods:{
        //     async addProductToCart(){
        //         // alert(this.productId);
        //         if(this.userId == 0){
        //             this.$toastr.e('You need to be signed in');
        //             return;
        //         }

        //         let response = await axios.post('/cart', {
        //             'product_id': this.productId
        //         });

        //         console
        //     }
        methods: {
  async addProductToCart() {
    if (this.userId === 0) {
      this.$toastr.e('You need to be signed in');
      return;
    }

    try {
      const response = await axios.post('/cart', {
        product_id: this.productId,
      });

      console.log(response.data);
      // You can perform additional actions here, such as showing a success message
    } catch (error) {
      console.error(error);
      // You can handle errors here, such as showing an error message
    }
  },

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

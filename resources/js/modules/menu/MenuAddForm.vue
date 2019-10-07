<template>
    <div class="add_form__wrapper">
        <form v-on:submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="name">Food Item</label>
                <input class="form-control" type="text" placeholder="Enter Food Item" v-model="food.item">
            </div>

            <div class="form-group">
                <label for="name">Select Category</label>
                <multiselect
                    v-model="food.category"
                    :options="categories"
                ></multiselect>
            </div>

            <div class="form-group">
                <label for="name">Price</label>
                <input class="form-control" type="number" placeholder="Enter Price" v-model="food.price">
            </div>

            <div class="form-group">
                <button class="btn-primary">Save</button>
            </div>
        </form>
    </div>
</template>

<script>
    import Multiselect from 'vue-multiselect';

    export default {
        name: "MenuAddForm.vue",
        props: ['categories'],
        components: { Multiselect },
        methods: {
            handleSubmit() {
                console.log('form data', this.food);
            }
        },
        data() {
            return {
                food: {
                    item: '',
                    category: '',
                    price: 10
                }
            }
        }
    }
</script>

<style scoped>

</style>

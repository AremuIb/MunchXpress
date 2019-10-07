<template>
    <div id="app" class="container">
        <div class="row">
            <div class="col-md-8">
                <card-component>
                    <template slot="title">
                        Menu Items
                    </template>
                    <template slot="body">
                        <div class="section">
                            <multiselect
                                v-model="menu"
                                :options="categories"
                            ></multiselect>
                        </div>

                        <br>
                        <menu-groups :items="currentMenuItems"></menu-groups>

                    </template>
                </card-component>
            </div>
            <div class="col-md-4">
                <card-component>
                    <template slot="title">
                        Add menu Items
                    </template>
                    <template slot="body">
                        <menu-add-form :categories="categories"></menu-add-form>
                    </template>
                </card-component>
            </div>
        </div>
    </div>
</template>

<script>
    import _ from 'lodash';
    import Multiselect from 'vue-multiselect';
    import MenuGroups from "./MenuGroups";
    import MenuAddForm from "./MenuAddForm";

    export default {
        name: "MenuContainer2.vue",
        props: ['items'],
        components: { Multiselect, MenuGroups, MenuAddForm },
        created() {
            _.forEach(this.items, (item, key) => {
                this.categories.push(key);
            })
            this.menu = this.categories[0];
        },
        data() {
            return {
                menu: '',
                categories: []
            }
        },
        computed: {
            currentMenuItems() {
                return this.items[this.menu]
            }
        }
    }
</script>

<style scoped>

</style>

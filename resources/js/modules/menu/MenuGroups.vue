<template>
    <div class="section">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Name &amp; Description</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item, key) in items" :key="key">
                <td>
                    <strong v-text="item.name"></strong>
                    <p v-text="item.description"></p>
                </td>
                <td>
                    <p v-text="item.price"></p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "MenuGroups.vue",
        props: ['items'],
    }
</script>

<style scoped>

</style>

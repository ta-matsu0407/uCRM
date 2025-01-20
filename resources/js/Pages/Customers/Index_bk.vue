<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import FlashMessage from '@/Components/FlashMessage.vue';
// import { onMounted } from 'vue'
import Pagination from '@/Components/Pagination.vue'

defineProps({
    'customers' : Object
})

//ページが表示されたタイミングで実行
// onMounted(() => {
//     console.log(props.customers)
//     console.log(props.customers.last_page)
// })
//ページネーションで必要な情報がpropsで渡ってきていることを確認
//何も表示されていなくても、開発者ツールのコンソールタブで確認できる
</script>

<template>
    <ul v-for="customer in customers.data" :key="customer.id">
        <!-- 'data'については、onMountedで確認 -->
        <li>{{ customer.id }}</li>
        <li>{{ customer.name }}</li>
    </ul>
    <Pagination class="mt-6" :links="customers.links"></Pagination>
            <!-- 'links'については、onMountedで確認 -->
            <!-- Paginationコンポーネントに情報を渡す -->
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    links: Array
})
// Customer/Indexから渡ってくる情報を取得

</script>

<template>
    <div v-if="links.length > 3">
        <div class="flex flex-wrap -mb-1">
            <template v-for="(link, index) in links" :key="index">
                <div v-if="link.url === nul" class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded" v-html="link.label" />
                <Link v-else class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500"
                :class="{ 'bg-blue-700 text-white': link.active }" :href="link.url" v-html="link.label" />
            </template>
            <!-- templateはdivでも良いが、forの繰り返しによって、
            <div> を使うと無駄なネストが増えるだけなので、不要な <div> を作らない <template> が適切  -->
        </div>
    </div>
</template>

<template>
    <div>INDEX</div>
    <div>
        The message is
        <br>
        <span class="text-green-600">{{ messageFrom }}</span>
    </div>
</template>

<script setup>
defineProps({
    messageFrom: String
})
</script>



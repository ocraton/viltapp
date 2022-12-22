<template>
    <div>INDEX</div>
    <div>
        The message is
        <span style="color: green">{{ messageFrom }}</span>
    </div>
</template>

<script setup>
defineProps({
    messageFrom: String
})
</script>



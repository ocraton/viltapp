<template>
    <span>
    {{ listing.id }}
    {{ listing.city }}
    {{ listing.street }}
    {{ listing.street_number }}
    ${{ listing.price }}
    </span>

</template>

<script setup>
defineProps({
    listing: Object
})
</script>

<template>
  <div>
    <div v-for="reply in items">
      <reply :data="reply"></reply>
    </div>
  </div>
</template>
<script>
import Slide from "./Slide.vue";

export default {
  props: ["data"], // accepts data for replies

  components: { Slide },

  data() {
    return {
      items: this.data,
    };
  },
};
</script>
<template>
  <div> 
  </div>
</template>
<script>

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
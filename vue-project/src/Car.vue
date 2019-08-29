<template>
  <div>
    <slot name="title"></slot>
  <hr>
  <hr>
  <slot name="text"></slot>
  </div>

</template>

<script>

import {eventEmitter} from './main'

export default {

}
</script>
<style scoped>
  div{
    border:1px solid black;
  }
  h2 {
    color: red;
  }
</style>
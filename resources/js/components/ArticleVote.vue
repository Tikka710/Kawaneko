<template>
  <div>
     <button
      type="button"
      class="btn m-0 p-1 btn-peach-gradient"
    >
      <i class="fas fa-vote-yea mr-1"
         :class="{'red-text':this.isVotedBy}"
      />
      こっちのほうがかわいい
      {{ countVotes }}
    </button>

  </div>
</template>

<script>
export default {
  props:{
    initialIsVotedBy: {
       type: Boolean,
        default: false,
    },
    initialCountVotes:{
      type: Boolean,
      default: 0,
    },

  },
  data(){
    return{
      isVotedBy: this.initialIsVotedBy,
      countVotes: this.initialCountVotes,
    }
  },
}
</script>
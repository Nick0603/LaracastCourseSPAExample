<template>
  <div>
    <h1 class="font-normal  text-3xl text-grey-darkest leading-none ">Logo Symbol</h1>    <div>
      <picture
        class="block rounded-lg shadow flex justify-center items-center my-6"
        style="height:382px"
      >
        <img alt="symbol-original.svg" src="/images/symbol-original.svg" />
      </picture>
    </div>
    <div class="flex justify-between items-center">
      <p>
        Original symbol on
        <strong>white</strong>background
      </p>
      <a
        class="border border-grey-light px-6 px-2 rounded-full text-sm text-black font-bold"
        target="_blank"
        href="/images/symbol-original.svg"
      >logo.svg</a>
    </div>

    <div>
      <picture
        class="block rounded-lg shadow flex justify-center items-center my-6 bg-standard-blue"
        style="height:382px"
      >
        <img alt="symbol-negative.svg" src="/images/symbol-negative.svg" />
      </picture>
    </div>
    <div class="flex justify-between items-center">
      <p>
        Negative symbol with accent on
        <strong>dark</strong>background
      </p>
      <a
        class="border border-grey-light px-6 px-2 rounded-full text-sm text-black font-bold"
        target="_blank"
        href="/images/symbol-negative.svg"
      >negative-logo.svg</a>
    </div>
    <div>
      <picture
        class="block rounded-lg shadow flex justify-center items-center my-6 bg-black"
        style="height:382px"
      >
        <img alt="symbol-pure-negative.svg" src="/images/symbol-pure-negative.svg" />
      </picture>
    </div>

    <div class="flex justify-between items-center">
      <p>
        Pure negative symbol on
        <strong>dark</strong>background
      </p>
      <a
        class="border border-grey-light px-6 px-2 rounded-full text-sm text-black font-bold"
        target="_blank"
        href="/images/symbol-pure-negative.svg"
      >symbol-pure-negative.svg</a>
    </div>
  </div>
</template>

<script>
export default {};
</script>

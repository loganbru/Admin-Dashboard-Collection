<!-- =========================================================================================
  File Name: ContextMenuClickNotClose.vue
  Description: Click not close on click of context item
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
========================================================================================== -->

<template>
  <vx-card title="Click Not Close" code-toggler>
    <vs-button @contextmenu.prevent="$refs.menu.open">Right click on me - Do not close</vs-button>
    <vue-context ref="menu" :closeOnClick="false">
        <li>
          <a href="#" @click="optionClicked('Next')" class="flex items-center text-sm">
            <feather-icon :icon="$vs.rtl ? 'ChevronLeftIcon' : 'ChevronRightIcon'" svgClasses="w-5 h-5" />
            <span class="ml-2">Next</span>
          </a>
        </li>
        <li>
          <a href="#" @click="optionClicked('Previous')" class="flex items-center text-sm">
            <feather-icon :icon="$vs.rtl ? 'ChevronRightIcon' : 'ChevronLeftIcon'" svgClasses="w-5 h-5" />
            <span class="ml-2">Previous</span>
          </a>
        </li>
        <li>
          <a href="#" @click="optionClicked('Increase')" class="flex items-center text-sm">
            <feather-icon icon="PlusIcon" svgClasses="w-5 h-5" />
            <span class="ml-2">Increase</span>
          </a>
        </li>
        <li>
          <a href="#" @click="optionClicked('Decrease')" class="flex items-center text-sm">
            <feather-icon icon="MinusIcon" svgClasses="w-5 h-5" />
            <span class="ml-2">Decrease</span>
          </a>
        </li>
        <li>
          <a href="#" @click="optionClicked('Random')" class="flex items-center text-sm">
            <feather-icon icon="ShuffleIcon" svgClasses="w-5 h-5" />
            <span class="ml-2">Random</span>
          </a>
        </li>
    </vue-context>
    <template slot="codeContainer">
<template>
    <vs-button @contextmenu.prevent="$refs.menu.open">Right click on me - Do not close</vs-button>
    <vue-context ref="menu" :closeOnClick="false">
        <ul class="bordered-items p-0">
            <li>
              <a href="#" @click="optionClicked('Next')" class="flex items-center text-sm">
                <feather-icon icon="ChevronRightIcon" svgClasses="w-5 h-5" />
                <span class="ml-2">Next</span>
              </a>
            </li>
            <li>
              <a href="#" @click="optionClicked('Previous')" class="flex items-center text-sm">
                <feather-icon icon="ChevronLeftIcon" svgClasses="w-5 h-5" />
                <span class="ml-2">Previous</span>
              </a>
            </li>
            <li>
              <a href="#" @click="optionClicked('Increase')" class="flex items-center text-sm">
                <feather-icon icon="PlusIcon" svgClasses="w-5 h-5" />
                <span class="ml-2">Increase</span>
              </a>
            </li>
            <li>
              <a href="#" @click="optionClicked('Decrease')" class="flex items-center text-sm">
                <feather-icon icon="MinusIcon" svgClasses="w-5 h-5" />
                <span class="ml-2">Decrease</span>
              </a>
            </li>
            <li>
              <a href="#" @click="optionClicked('Random')" class="flex items-center text-sm">
                <feather-icon icon="ShuffleIcon" svgClasses="w-5 h-5" />
                <span class="ml-2">Random</span>
              </a>
            </li>
        </ul>
    </vue-context>
</template>

&lt;script&gt;
import { VueContext } from 'vue-context';

export default{
  components: {
    VueContext
  },
  methods: {
    optionClicked(text) {
      this.$vs.notify({
        title:'Action Clicked',
        text: text,
        icon: 'feather',
        iconPack: 'icon-alert-circle',
        color:'primary'
      })
    }
  }
}
&lt;/script&gt;
    </template>
  </vx-card>
</template>

<script>
import { VueContext } from 'vue-context';

export default{
  components: {
    VueContext
  },
  methods: {
    optionClicked(text) {
      this.$vs.notify({
        title:'Action Clicked',
        text: text,
        icon: 'feather',
        iconPack: 'icon-alert-circle',
        color:'primary'
      })
    }
  }
}
</script>

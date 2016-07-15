import Vue from 'Vue';
import Alert from './components/Alert.vue';
import RendersGraph from './mixins/RendersGraph';
new Vue({
	el:"#app1",

	components: { Alert }

});

new Vue({
	el:"#app2",
	mixins:[RendersGraph]
})


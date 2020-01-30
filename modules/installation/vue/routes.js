import WelcomeStep from "./pages/WelcomeStep";
import InstallationStep1 from "./pages/InstallationStep1";

window.routes.push({path: '/installation/', component: WelcomeStep, name: 'welcome'});
window.routes.push({path: '/installation/step1', component: InstallationStep1, name: 'step1'});
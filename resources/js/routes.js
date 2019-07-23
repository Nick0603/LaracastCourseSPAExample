import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Illustrations from './components/Illustrations';
import Colors from './components/Colors';
import Mascot from './components/Mascot';
import TheTeam from './components/TheTeam';
import Typography from './components/Typography';
import Wallpapers from './components/Wallpapers';
import NotFoud from './components/NotFound';
import SiteStats from './components/SiteStats';
import Achievements from './components/Achievements';
let LoadersAndAnimations = () => import(/* webpackChunkName: "loaders" */'./components/LoadersAndAnimations');

export default {
    mode: 'history',
    linkActiveClass:'font-bold',
    routes: [
        {
            path: '*',
            component: NotFoud
        },
        {
            path: '/',
            component: Logo
        },
        {
            path: '/logo-symbol',
            component: LogoSymbol
        },
        {
            path: '/illustrations',
            component: Illustrations
        },
        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations
        },
        {
            path: '/mascot',
            component: Mascot
        },
        {
            path: '/the-team',
            component: TheTeam
        },
        {
            path: '/typography',
            component: Typography
        },
        {
            path: '/wallpapers',
            component: Wallpapers
        },
        {
            path: '/colors',
            component: Colors
        },
        {
            path: '/site-stats',
            component: SiteStats
        },
        {
            path: '/achievements',
            component: Achievements
        }
    ]
}
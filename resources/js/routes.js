import Home from './components/Home';
import About from './components/About';
import NotFound from './components/NotFound';
import Form1 from "./components/Form1";
import Form1list from "./components/Form1list";
import Form1Edit from './components/Form1Edit';
import Dashboard from './components/Dashboard';
import Register from './components/Register';
import Login from './components/Login';



export default{
    mode:'history',
    linkActiveClass:'font-semibold',

    routes:[
    {
        path:'*',
        component:NotFound
    },
   

        {   name:Home,
            path:'/',
            component:Home
        },
        {
            path:'/about',
            component:About
        },
        {
            path:'/forms1list',
            component:Form1list
        },
        {
            path:'/forms1',
            component:Form1
        },
        {   
            name:'edit',
            path:'/forms1/edit:id',
            component:Form1Edit
        },


        {   
            name:'login',
            path:'/login',
            component:Login
        },
        {   
            name:'register',
            path:'/register',
            component:Register
        },
        {   
            name:'dashboard',
            path:'/dashboard',
            component:Dashboard
        },


    ]
}
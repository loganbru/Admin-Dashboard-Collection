import { Routes } from '@angular/router';
import { LoginComponent } from './login/login.component';
import { RegisterPageComponent } from './register/register.component';
import { ErrorComponent } from './error/error.component';
import { LockscreenComponent } from './lockscreen/lockscreen.component';

export const SessionRoute: Routes = [
  {
    path: '',
    children: [{
      path: 'login',
      component: LoginComponent
    },{
      path: 'register',
      component: RegisterPageComponent
    },{
      path: 'error/:type',
      component: ErrorComponent
    },{
      path: 'lock',
      component: LockscreenComponent
    }]
  }
];

import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent} from 'src/app/home/home.component';
import { SelectieComponent} from 'src/app/selectie/selectie.component';
import { TeamComponent} from 'src/app/team/team.component';
import { WedstrijdComponent} from 'src/app/wedstrijd/wedstrijd.component';
import { SpelersComponent} from 'src/app/spelers/spelers.component';


const routes: Routes = [
   {path: '', component: HomeComponent }, 
   {path: 'selectie', component: SelectieComponent },
   {path: 'team', component: TeamComponent},
   {path: 'wedstrijd', component: WedstrijdComponent},
   {path: 'spelers', component: SpelersComponent}
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

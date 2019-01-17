import { NgtUniversalModule } from '@ng-toolkit/universal';
import { CommonModule } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';
import { TransferHttpCacheModule } from '@nguniversal/common';
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { SpelersComponent } from './spelers/spelers.component';
import { SelectieComponent } from './selectie/selectie.component';
import { TeamComponent } from './team/team.component';
import { WedstrijdComponent } from './wedstrijd/wedstrijd.component';
import { NavbarComponent } from './navbar/navbar.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    SpelersComponent,
    SelectieComponent,
    TeamComponent,
    WedstrijdComponent,
    NavbarComponent
  ],
  imports:[
 CommonModule,
NgtUniversalModule,
 
 TransferHttpCacheModule,
HttpClientModule,
 
    
    AppRoutingModule
  ],
  providers: [],
})
export class AppModule { }

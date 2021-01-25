//Angular Dependencies
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { HttpModule} from '@angular/http';
import { HttpClientModule } from '@angular/common/http';

import { pgCardModule} from '../@pages/components/card/card.module';
import { pgSwitchModule } from '../@pages/components/switch/switch.module';
import { pgTabsModule } from '../@pages/components/tabs/tabs.module';

import { NvD3Module } from 'ngx-nvd3';
import { NgxEchartsModule } from 'ngx-echarts';

import { SwiperModule, SWIPER_CONFIG, SwiperConfigInterface } from 'ngx-swiper-wrapper';

const DEFAULT_SWIPER_CONFIG: SwiperConfigInterface = {
  direction: 'horizontal',
  slidesPerView: 'auto'
};

// Widgets
import { ImageWidgetComponent } from './widgets/image-widget/image-widget.component';
import { ImageWidgetBasicComponent } from './widgets/image-widget-basic/image-widget-basic.component';
import { GraphTileWidgetComponent } from './widgets/graph-tile-widget/graph-tile-widget.component';
import { PlainWidgetComponent } from './widgets/plain-widget/plain-widget.component';
import { PlainLiveWidgetComponent } from './widgets/plain-live-widget/plain-live-widget.component';
import { GraphLiveWidgetComponent } from './widgets/graph-live-widget/graph-live-widget.component';
import { BarTileWidgetComponent } from './widgets/bar-tile-widget/bar-tile-widget.component';
import { GraphTileFlatWidgetComponent } from './widgets/graph-tile-flat-widget/graph-tile-flat-widget.component';
import { ProgressTileFlatWidgetComponent } from './widgets/progress-tile-flat-widget/progress-tile-flat-widget.component';
import { StatTileWidgetComponent } from './widgets/stat-tile-widget/stat-tile-widget.component';
import { GraphWidgetComponent } from './widgets/graph-widget/graph-widget.component';
import { TableBasicWidgetComponent } from './widgets/table-basic-widget/table-basic-widget.component';
import { MapWidgetComponent } from './widgets/map-widget/map-widget.component';
import { RealtimeWidgetComponent } from './widgets/realtime-widget/realtime-widget.component';
import { StackedBarWidgetComponent } from './widgets/stacked-bar-widget/stacked-bar-widget.component';
import { GraphOptionsWidgetComponent } from './widgets/graph-options-widget/graph-options-widget.component';
import { WeatherWidgetComponent } from './widgets/weather-widget/weather-widget.component';
import { TableWidgetComponent } from './widgets/table-widget/table-widget.component';
import { SocialImageTileWidgetComponent } from './widgets/social-image-tile-widget/social-image-tile-widget.component';
import { SocialPostTileWidgetComponent } from './widgets/social-post-tile-widget/social-post-tile-widget.component';
import { ProjectProgressWidgetComponent } from './widgets/project-progress-widget/project-progress-widget.component';
import { WeeklySalesWidgetComponent } from './widgets/weekly-sales-widget/weekly-sales-widget.component';
import { QuickStatsWidgetComponent } from './widgets/quick-stats-widget/quick-stats-widget.component';
import { TodoListWidgetComponent } from './widgets/todo-list-widget/todo-list-widget.component';
import { GraphWidgetBasicComponent } from './widgets/graph-widget-basic/graph-widget-basic.component';


const components = [
    ImageWidgetComponent,
    ImageWidgetBasicComponent,
    GraphTileWidgetComponent,
    PlainWidgetComponent,
    PlainLiveWidgetComponent,
    GraphLiveWidgetComponent,
    BarTileWidgetComponent,
    GraphTileFlatWidgetComponent,
    ProgressTileFlatWidgetComponent,
    StatTileWidgetComponent,
    GraphWidgetComponent,
    GraphWidgetBasicComponent,
    TableBasicWidgetComponent,
    MapWidgetComponent,
    RealtimeWidgetComponent,
    StackedBarWidgetComponent,
    GraphOptionsWidgetComponent,
    WeatherWidgetComponent,
    TableWidgetComponent,
    SocialImageTileWidgetComponent,
    SocialPostTileWidgetComponent,
    ProjectProgressWidgetComponent,
    WeeklySalesWidgetComponent,
    QuickStatsWidgetComponent,
    TodoListWidgetComponent
];

@NgModule({
  imports: [
    pgCardModule,
    pgTabsModule,
    NvD3Module,
    NgxEchartsModule,
    SwiperModule,
    pgSwitchModule
  ],
  declarations: components,
  exports: components,
  providers: [{
    provide: SWIPER_CONFIG,
    useValue: DEFAULT_SWIPER_CONFIG
  }]
})
export class DashboardModule { }
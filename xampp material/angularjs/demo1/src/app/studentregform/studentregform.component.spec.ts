import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { StudentregformComponent } from './studentregform.component';

describe('StudentregformComponent', () => {
  let component: StudentregformComponent;
  let fixture: ComponentFixture<StudentregformComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ StudentregformComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(StudentregformComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

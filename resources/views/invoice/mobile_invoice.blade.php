<!DOCTYPE html>
<html lang="km">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('app.app_name') }} | បោះពុម្ភវិក្កយប័ត្រ</title>
    <link rel="stylesheet" href="{{ asset('fonts/font.css')}}"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
      @font-face {
          font-family: 'Siemreap';
          font-style: normal;
          font-weight: normal;
      }
  </style>
    <style>
        @charset "UTF-8";

        html, body {
          font-family: "Siemreap";
        }
/*!
 * Bootstrap  v5.2.3 (https://getbootstrap.com/)
 * Copyright 2011-2022 The Bootstrap Authors
 * Copyright 2011-2022 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
:root {
  --bs-blue: #007bff;
  --bs-indigo: #6610f2;
  --bs-purple: #696cff;
  --bs-pink: #e83e8c;
  --bs-red: #ff3e1d;
  --bs-orange: #fd7e14;
  --bs-yellow: #ffab00;
  --bs-green: #71dd37;
  --bs-teal: #20c997;
  --bs-cyan: #03c3ec;
  --bs-black: #435971;
  --bs-white: #fff;
  --bs-gray: rgba(67, 89, 113, 0.6);
  --bs-gray-dark: rgba(67, 89, 113, 0.8);
  --bs-gray-25: rgba(67, 89, 113, 0.025);
  --bs-gray-50: rgba(67, 89, 113, 0.05);
  --bs-primary: #696cff;
  --bs-secondary: #8592a3;
  --bs-success: #71dd37;
  --bs-info: #03c3ec;
  --bs-warning: #ffab00;
  --bs-danger: #ff3e1d;
  --bs-light: #fcfdfd;
  --bs-dark: #233446;
  --bs-gray: rgba(67, 89, 113, 0.1);
  --bs-primary-rgb: 105, 108, 255;
  --bs-secondary-rgb: 133, 146, 163;
  --bs-success-rgb: 113, 221, 55;
  --bs-info-rgb: 3, 195, 236;
  --bs-warning-rgb: 255, 171, 0;
  --bs-danger-rgb: 255, 62, 29;
  --bs-light-rgb: 252, 253, 253;
  --bs-dark-rgb: 35, 52, 70;
  --bs-gray-rgb: 67, 89, 113;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 67, 89, 113;
  --bs-body-color-rgb: 105, 122, 141;
  --bs-body-bg-rgb: 245, 245, 249;
  --bs-font-sans-serif: "Public Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
  --bs-font-monospace: "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-root-font-size: 16px;
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 0.9375rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.53;
  --bs-body-color: #4b5764;
  --bs-body-bg: #ffffff;
  --bs-border-width: 1px;
  --bs-border-style: solid;
  --bs-border-color: #d9dee3;
  --bs-border-color-translucent: rgba(67, 89, 113, 0.175);
  --bs-border-radius: 0.375rem;
  --bs-border-radius-sm: 0.25rem;
  --bs-border-radius-lg: 0.5rem;
  --bs-border-radius-xl: 0.625rem;
  --bs-border-radius-2xl: 2rem;
  --bs-border-radius-pill: 50rem;
  --bs-link-color: #696cff;
  --bs-link-hover-color: #5f61e6;
  --bs-code-color: #e83e8c;
  --bs-highlight-bg: #ffeecc;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

:root {
  font-size: var(--bs-root-font-size);
}
@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(67, 89, 113, 0);
}

h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1, label, p {
    color: #000 !important;
}

hr {
  margin: 1rem 0;
  color: #d9dee3;
  border: 0;
  border-top: 1px solid;
  opacity: 1;
}

h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
  margin-top: 0;
  margin-bottom: 1rem;
  font-weight: 500;
  line-height: 1.1;
  color: #566a7f;
}

h1, .h1 {
  font-size: calc(1.3625rem + 1.35vw);
}
@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.375rem;
  }
}

h2, .h2 {
  font-size: calc(1.325rem + 0.9vw);
}
@media (min-width: 1200px) {
  h2, .h2 {
    font-size: 2rem;
  }
}

h3, .h3 {
  font-size: calc(1.2875rem + 0.45vw);
}
@media (min-width: 1200px) {
  h3, .h3 {
    font-size: 1.625rem;
  }
}

h4, .h4 {
  font-size: calc(1.2625rem + 0.15vw);
}
@media (min-width: 1200px) {
  h4, .h4 {
    font-size: 1.375rem;
  }
}

h5, .h5 {
  font-size: 1.125rem;
}

h6, .h6 {
  font-size: 0.9375rem;
}

p {
  margin-top: 0;
  margin-bottom: 0.2rem;
}

abbr[title] {
  text-decoration: underline dotted;
  cursor: help;
  text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul {
  padding-left: 2rem;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 500;
}

dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small, .small {
  font-size: 85%;
}

mark, .mark {
  padding: 0.1875em;
  background-color: var(--bs-highlight-bg);
}

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

a {
  color: var(--bs-link-color);
  text-decoration: none;
}
a:hover {
  color: var(--bs-link-hover-color);
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 85%;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-size: 85%;
  color: var(--bs-code-color);
  word-wrap: break-word;
}
a > code {
  color: inherit;
}

kbd {
  padding: 0.1875rem 0.375rem;
  font-size: 85%;
  color: var(--bs-body-bg);
  background-color: var(--bs-body-color);
  border-radius: 0.25rem;
}
kbd kbd {
  padding: 0;
  font-size: 1em;
}

figure {
  margin: 0 0 0rem;
}

img,
svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
  color: #a1acb8;
  text-align: left;
}

th {
  font-weight: 500;
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}

[list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
  display: none !important;
}

button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}
button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend + * {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type=search] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
  padding: 0;
}

::file-selector-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none !important;
}

.lead {
  font-size: 1.0546875rem;
  font-weight: 400;
}

.display-1 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 500;
  line-height: 1.1;
}
@media (min-width: 1200px) {
  .display-1 {
    font-size: 4rem;
  }
}

.display-2 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 500;
  line-height: 1.1;
}
@media (min-width: 1200px) {
  .display-2 {
    font-size: 3.5rem;
  }
}

.display-3 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 500;
  line-height: 1.1;
}
@media (min-width: 1200px) {
  .display-3 {
    font-size: 3rem;
  }
}

.display-4 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 500;
  line-height: 1.1;
}
@media (min-width: 1200px) {
  .display-4 {
    font-size: 2.5rem;
  }
}

.display-5 {
  font-size: calc(1.325rem + 0.9vw);
  font-weight: 500;
  line-height: 1.1;
}
@media (min-width: 1200px) {
  .display-5 {
    font-size: 2rem;
  }
}

.display-6 {
  font-size: calc(1.275rem + 0.3vw);
  font-weight: 500;
  line-height: 1.1;
}
@media (min-width: 1200px) {
  .display-6 {
    font-size: 1.5rem;
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 85%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 0.3rem;
  font-size: 1.0546875rem;
}
.blockquote > :last-child {
  margin-bottom: 0;
}

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 85%;
  color: rgba(67, 89, 113, 0.6);
}
.blockquote-footer::before {
  content: "— ";
}

.img-avatar{
  width: 50px;
  height: 50px;
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0;
  background-color: transparent;
  border: 0px solid var(--bs-border-color);
  border-radius: 0px;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 85%;
  color: #a1acb8;
}

.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  --bs-gutter-x: 1.625rem;
  --bs-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
@media (min-width: 1400px) {
  .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1440px;
  }
}
.row {
  --bs-gutter-x: 1.625rem;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-0.5 * var(--bs-gutter-x));
  margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row > * {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-top: var(--bs-gutter-y);
}

.col {
  flex: 1 0 0%;
}

.row-cols-auto > * {
  flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  flex: 0 0 auto;
  width: 33.3333333333%;
}

.row-cols-4 > * {
  flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  flex: 0 0 auto;
  width: 16.6666666667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
}

.col-1 {
  flex: 0 0 auto;
  width: 8.33333333%;
}

.col-2 {
  flex: 0 0 auto;
  width: 16.66666667%;
}

.col-3 {
  flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  flex: 0 0 auto;
  width: 33.33333333%;
}

.col-5 {
  flex: 0 0 auto;
  width: 41.66666667%;
}

.col-6 {
  flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  flex: 0 0 auto;
  width: 58.33333333%;
}

.col-8 {
  flex: 0 0 auto;
  width: 66.66666667%;
}

.col-9 {
  flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  flex: 0 0 auto;
  width: 83.33333333%;
}

.col-11 {
  flex: 0 0 auto;
  width: 91.66666667%;
}

.col-12 {
  flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.33333333%;
}

.offset-2 {
  margin-left: 16.66666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333333%;
}

.offset-5 {
  margin-left: 41.66666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333333%;
}

.offset-8 {
  margin-left: 66.66666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333333%;
}

.offset-11 {
  margin-left: 91.66666667%;
}

.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem;
}

@media (min-width: 576px) {
  .col-sm {
    flex: 1 0 0%;
  }
  .row-cols-sm-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-sm-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-sm-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-sm-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-sm-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-sm-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-sm-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-sm-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-sm-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
  .g-sm-0,
  .gx-sm-0 {
    --bs-gutter-x: 0;
  }
  .g-sm-0,
  .gy-sm-0 {
    --bs-gutter-y: 0;
  }
  .g-sm-1,
  .gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-sm-1,
  .gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-sm-2,
  .gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-sm-2,
  .gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-sm-3,
  .gx-sm-3 {
    --bs-gutter-x: 1rem;
  }
  .g-sm-3,
  .gy-sm-3 {
    --bs-gutter-y: 1rem;
  }
  .g-sm-4,
  .gx-sm-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-sm-4,
  .gy-sm-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-sm-5,
  .gx-sm-5 {
    --bs-gutter-x: 3rem;
  }
  .g-sm-5,
  .gy-sm-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 768px) {
  .col-md {
    flex: 1 0 0%;
  }
  .row-cols-md-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-md-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-md-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-md-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-md-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-md-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-md-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-md-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-md-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-md-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-md-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-md-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-md-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-md-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
  .g-md-0,
  .gx-md-0 {
    --bs-gutter-x: 0;
  }
  .g-md-0,
  .gy-md-0 {
    --bs-gutter-y: 0;
  }
  .g-md-1,
  .gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-md-1,
  .gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-md-2,
  .gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-md-2,
  .gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-md-3,
  .gx-md-3 {
    --bs-gutter-x: 1rem;
  }
  .g-md-3,
  .gy-md-3 {
    --bs-gutter-y: 1rem;
  }
  .g-md-4,
  .gx-md-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-md-4,
  .gy-md-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-md-5,
  .gx-md-5 {
    --bs-gutter-x: 3rem;
  }
  .g-md-5,
  .gy-md-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 992px) {
  .col-lg {
    flex: 1 0 0%;
  }
  .row-cols-lg-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-lg-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-lg-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-lg-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-lg-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-lg-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-lg-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
  .g-lg-0,
  .gx-lg-0 {
    --bs-gutter-x: 0;
  }
  .g-lg-0,
  .gy-lg-0 {
    --bs-gutter-y: 0;
  }
  .g-lg-1,
  .gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-lg-1,
  .gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-lg-2,
  .gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-lg-2,
  .gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-lg-3,
  .gx-lg-3 {
    --bs-gutter-x: 1rem;
  }
  .g-lg-3,
  .gy-lg-3 {
    --bs-gutter-y: 1rem;
  }
  .g-lg-4,
  .gx-lg-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-lg-4,
  .gy-lg-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-lg-5,
  .gx-lg-5 {
    --bs-gutter-x: 3rem;
  }
  .g-lg-5,
  .gy-lg-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    flex: 1 0 0%;
  }
  .row-cols-xl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
  .g-xl-0,
  .gx-xl-0 {
    --bs-gutter-x: 0;
  }
  .g-xl-0,
  .gy-xl-0 {
    --bs-gutter-y: 0;
  }
  .g-xl-1,
  .gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xl-1,
  .gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xl-2,
  .gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xl-2,
  .gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xl-3,
  .gx-xl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xl-3,
  .gy-xl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xl-4,
  .gx-xl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xl-4,
  .gy-xl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xl-5,
  .gx-xl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xl-5,
  .gy-xl-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1400px) {
  .col-xxl {
    flex: 1 0 0%;
  }
  .row-cols-xxl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xxl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xxl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xxl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xxl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xxl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xxl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xxl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xxl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xxl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xxl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xxl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xxl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xxl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xxl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xxl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xxl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xxl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xxl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xxl-0 {
    margin-left: 0;
  }
  .offset-xxl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xxl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xxl-3 {
    margin-left: 25%;
  }
  .offset-xxl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xxl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xxl-6 {
    margin-left: 50%;
  }
  .offset-xxl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xxl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xxl-9 {
    margin-left: 75%;
  }
  .offset-xxl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xxl-11 {
    margin-left: 91.66666667%;
  }
  .g-xxl-0,
  .gx-xxl-0 {
    --bs-gutter-x: 0;
  }
  .g-xxl-0,
  .gy-xxl-0 {
    --bs-gutter-y: 0;
  }
  .g-xxl-1,
  .gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xxl-1,
  .gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xxl-2,
  .gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xxl-2,
  .gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xxl-3,
  .gx-xxl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xxl-3,
  .gy-xxl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xxl-4,
  .gx-xxl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xxl-4,
  .gy-xxl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xxl-5,
  .gx-xxl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xxl-5,
  .gy-xxl-5 {
    --bs-gutter-y: 3rem;
  }
}
.table {
  --bs-table-color: var(--bs-body-color);
  --bs-table-bg: transparent;
  --bs-table-border-color: #d9dee3;
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: var(--bs-body-color);
  --bs-table-striped-bg: #f9fafb;
  --bs-table-active-color: var(--bs-body-color);
  --bs-table-active-bg: rgba(67, 89, 113, 0.1);
  --bs-table-hover-color: var(--bs-body-color);
  --bs-table-hover-bg: rgba(67, 89, 113, 0.06);
  width: 100%;
  margin-bottom: 1rem;
  color: var(--bs-table-color);
  vertical-align: middle;
  border-color: var(--bs-table-border-color);
}
.table > :not(caption) > * > * {
  padding: 0.625rem 1.25rem;
  background-color: var(--bs-table-bg);
  border-bottom-width: 1px;
  box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
.table > tbody {
  vertical-align: inherit;
}
.table > thead {
  vertical-align: bottom;
}

.table-group-divider {
  border-top: 2px solid #d9dee3;
}

.caption-top {
  caption-side: top;
}

.table-sm > :not(caption) > * > * {
  padding: 0.3125rem 0.625rem;
}

.table-bordered > :not(caption) > * {
  border-width: 1px 0;
}
.table-bordered > :not(caption) > * > * {
  border-width: 0 1px;
}

.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0;
}
.table-borderless > :not(:first-child) {
  border-top-width: 0;
}

.table-striped > tbody > tr:nth-of-type(odd) > * {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color);
}

.table-striped-columns > :not(caption) > tr > :nth-child(even) {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color);
}

.table-active {
  --bs-table-accent-bg: var(--bs-table-active-bg);
  color: var(--bs-table-active-color);
}

.table-hover > tbody > tr:hover > * {
  --bs-table-accent-bg: var(--bs-table-hover-bg);
  color: var(--bs-table-hover-color);
}

.table-primary {
  --bs-table-color: #435971;
  --bs-table-bg: #e1e2ff;
  --bs-table-border-color: #d1d4f1;
  --bs-table-striped-bg: #dcdefb;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #d1d4f1;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #d8daf6;
  --bs-table-hover-color: #435971;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-secondary {
  --bs-table-color: #435971;
  --bs-table-bg: #e7e9ed;
  --bs-table-border-color: #d7dbe1;
  --bs-table-striped-bg: #e2e5e9;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #d7dbe1;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #dde0e6;
  --bs-table-hover-color: #435971;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-success {
  --bs-table-color: #435971;
  --bs-table-bg: #e3f8d7;
  --bs-table-border-color: #d3e8cd;
  --bs-table-striped-bg: #def3d4;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #d3e8cd;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #d9eed1;
  --bs-table-hover-color: #435971;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-info {
  --bs-table-color: #435971;
  --bs-table-bg: #cdf3fb;
  --bs-table-border-color: #bfe4ed;
  --bs-table-striped-bg: #c9eef7;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #bfe4ed;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #c5eaf3;
  --bs-table-hover-color: #435971;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-warning {
  --bs-table-color: #435971;
  --bs-table-bg: #ffeecc;
  --bs-table-border-color: #ecdfc3;
  --bs-table-striped-bg: #f9eac9;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #ecdfc3;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #f4e5c7;
  --bs-table-hover-color: #435971;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-danger {
  --bs-table-color: #435971;
  --bs-table-bg: #ffd8d2;
  --bs-table-border-color: #eccbc8;
  --bs-table-striped-bg: #f9d4cf;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #eccbc8;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #f4d0cc;
  --bs-table-hover-color: #435971;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-light {
  --bs-table-color: #435971;
  --bs-table-bg: #fcfdfd;
  --bs-table-border-color: #eaedef;
  --bs-table-striped-bg: #f6f8f9;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #eaedef;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #f1f3f5;
  --bs-table-hover-color: #435971;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-dark {
  --bs-table-color: #fff;
  --bs-table-bg: #233446;
  --bs-table-border-color: #394859;
  --bs-table-striped-bg: #2a3a4c;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #394859;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #304051;
  --bs-table-hover-color: #fff;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
.form-label {
  margin-bottom: 0.5rem;
  font-size: 0.9rem;
  font-weight: 500;
  color: #566a7f;
}

.col-form-label {
  padding-top: calc(0.4375rem + 1px);
  padding-bottom: calc(0.4375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  font-weight: 500;
  line-height: 1.53;
  color: #566a7f;
}

.col-form-label-lg {
  padding-top: calc(0.75rem + 1px);
  padding-bottom: calc(0.75rem + 1px);
  font-size: 1rem;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.75rem;
}

.form-text {
  margin-top: 0.3rem;
  font-size: 85%;
  color: #b4bdc6;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.4375rem 0.875rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.53;
  color: #697a8d;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #d9dee3;
  appearance: none;
  border-radius: 0.375rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}
.form-control[type=file] {
  overflow: hidden;
}
.form-control[type=file]:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control:focus {
  color: #697a8d;
  background-color: #fff;
  border-color: rgba(249, 249, 255, 0.54);
  outline: 0;
  box-shadow: 0 0 0.25rem 0.05rem rgba(105, 108, 255, 0.1);
}
.form-control::-webkit-date-and-time-value {
  height: 1.53em;
}
.form-control::placeholder {
  color: #b4bdc6;
  opacity: 1;
}
.form-control:disabled {
  background-color: #eceef1;
  opacity: 1;
}
.form-control::file-selector-button {
  padding: 0.4375rem 0.875rem;
  margin: -0.4375rem -0.875rem;
  margin-inline-end: 0.875rem;
  color: #697a8d;
  background-color: #fff;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::file-selector-button {
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: #f2f2f2;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.4375rem 0;
  margin-bottom: 0;
  line-height: 1.53;
  color: #697a8d;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}
.form-control-plaintext:focus {
  outline: 0;
}
.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  min-height: calc(1.53em + 0.5rem + 2px);
  padding: 0.25rem 0.625rem;
  font-size: 0.75rem;
  border-radius: 0.25rem;
}
.form-control-sm::file-selector-button {
  padding: 0.25rem 0.625rem;
  margin: -0.25rem -0.625rem;
  margin-inline-end: 0.625rem;
}

.form-control-lg {
  min-height: calc(1.53em + 1.5rem + 2px);
  padding: 0.75rem 1.25rem;
  font-size: 1rem;
  border-radius: 0.5rem;
}
.form-control-lg::file-selector-button {
  padding: 0.75rem 1.25rem;
  margin: -0.75rem -1.25rem;
  margin-inline-end: 1.25rem;
}

textarea.form-control {
  min-height: calc(1.53em + 0.875rem + 2px);
}
textarea.form-control-sm {
  min-height: calc(1.53em + 0.5rem + 2px);
}
textarea.form-control-lg {
  min-height: calc(1.53em + 1.5rem + 2px);
}

.form-control-color {
  width: 3rem;
  height: calc(1.53em + 0.875rem + 2px);
  padding: 0.4375rem;
}
.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control-color::-moz-color-swatch {
  border: 0 !important;
  border-radius: 0.375rem;
}
.form-control-color::-webkit-color-swatch {
  border-radius: 0.375rem;
}
.form-control-color.form-control-sm {
  height: calc(1.53em + 0.5rem + 2px);
}
.form-control-color.form-control-lg {
  height: calc(1.53em + 1.5rem + 2px);
}

.form-select {
  display: block;
  width: 100%;
  padding: 0.4375rem 1.875rem 0.4375rem 0.875rem;
  -moz-padding-start: calc(0.875rem - 3px);
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.53;
  color: #697a8d;
  background-color: #fff;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%2867, 89, 113, 0.6%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.875rem center;
  background-size: 17px 12px;
  border: 1px solid #d9dee3;
  border-radius: 0.375rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-select {
    transition: none;
  }
}
.form-select:focus {
  border-color: rgba(249, 249, 255, 0.54);
  outline: 0;
  box-shadow: 0 0 0.25rem 0.05rem rgba(105, 108, 255, 0.1);
}
.form-select[multiple], .form-select[size]:not([size="1"]) {
  padding-right: 0.875rem;
  background-image: none;
}
.form-select:disabled {
  color: #697a8d;
  background-color: #eceef1;
}
.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #697a8d;
}

.form-select-sm {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.625rem;
  font-size: 0.75rem;
  border-radius: 0.25rem;
}

.form-select-lg {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 1.25rem;
  font-size: 1rem;
  border-radius: 0.5rem;
}

.form-check {
  display: block;
  min-height: 1.434375rem;
  padding-left: 1.7em;
  margin-bottom: 0.125rem;
}
.form-check .form-check-input {
  float: left;
  margin-left: -1.7em;
}

.form-check-reverse {
  padding-right: 1.7em;
  padding-left: 0;
  text-align: right;
}
.form-check-reverse .form-check-input {
  float: right;
  margin-right: -1.7em;
  margin-left: 0;
}

.form-check-input {
  width: 1.2em;
  height: 1.2em;
  margin-top: 0.165em;
  vertical-align: top;
  background-color: #fff;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 1px solid #d9dee3;
  appearance: none;
  print-color-adjust: exact;
}
.form-check-input[type=checkbox] {
  border-radius: 0.25em;
}
.form-check-input[type=radio] {
  border-radius: 50%;
}
.form-check-input:active {
  filter: brightness(90%);
}
.form-check-input:focus {
  border-color: rgba(249, 249, 255, 0.54);
  outline: 0;
  box-shadow: 0 0 0.25rem 0.05rem rgba(105, 108, 255, 0.1);
}
.form-check-input:checked {
  background-color: rgba(105, 108, 255, 0.08);
  border-color: rgba(105, 108, 255, 0.08);
}
.form-check-input:checked[type=checkbox] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
}
.form-check-input:checked[type=radio] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='1.5' fill='%23fff'/%3e%3c/svg%3e");
}
.form-check-input[type=checkbox]:indeterminate {
  background-color: rgba(105, 108, 255, 0.08);
  border-color: rgba(105, 108, 255, 0.08);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 10h8'/%3e%3c/svg%3e");
}
.form-check-input:disabled {
  pointer-events: none;
  filter: none;
  opacity: 0.5;
}
.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  cursor: default;
  opacity: 0.5;
}

.form-check-label {
  cursor: pointer;
}

.form-switch {
  padding-left: 2.5em;
}
.form-switch .form-check-input {
  width: 2em;
  margin-left: -2.5em;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%2867, 89, 113, 0.3%29'/%3e%3c/svg%3e");
  background-position: left center;
  border-radius: 2em;
  transition: background-position 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    transition: none;
  }
}
.form-switch .form-check-input:focus {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%28249, 249, 255, 0.54%29'/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
  background-position: right center;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}
.form-switch.form-check-reverse {
  padding-right: 2.5em;
  padding-left: 0;
}
.form-switch.form-check-reverse .form-check-input {
  margin-right: -2.5em;
  margin-left: 0;
}

.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.btn-check[disabled] + .btn, .btn-check:disabled + .btn {
  pointer-events: none;
  filter: none;
  opacity: 0.65;
}

.form-range {
  width: 100%;
  height: 0.975rem;
  padding: 0;
  background-color: transparent;
  appearance: none;
}
.form-range:focus {
  outline: 0;
}
.form-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 8px 0px rgba(67, 89, 113, 0.4);
}
.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 8px 0px rgba(67, 89, 113, 0.4);
}
.form-range::-moz-focus-outer {
  border: 0;
}
.form-range::-webkit-slider-thumb {
  width: 0.875rem;
  height: 0.875rem;
  margin-top: -0.25rem;
  background-color: #fff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    transition: none;
  }
}
.form-range::-webkit-slider-thumb:active {
  background-color: #fff;
}
.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.375rem;
  color: transparent;
  cursor: pointer;
  background-color: #eceef1;
  border-color: transparent;
  border-radius: 1rem;
}
.form-range::-moz-range-thumb {
  width: 0.875rem;
  height: 0.875rem;
  background-color: #fff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    transition: none;
  }
}
.form-range::-moz-range-thumb:active {
  background-color: #fff;
}
.form-range::-moz-range-track {
  width: 100%;
  height: 0.375rem;
  color: transparent;
  cursor: pointer;
  background-color: #eceef1;
  border-color: transparent;
  border-radius: 1rem;
}
.form-range:disabled {
  pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
  background-color: #d9dee3;
}
.form-range:disabled::-moz-range-thumb {
  background-color: #d9dee3;
}

.form-floating {
  position: relative;
}
.form-floating > .form-control,
.form-floating > .form-control-plaintext,
.form-floating > .form-select {
  height: calc(3.5rem + 2px);
  line-height: 1.25;
}
.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 1rem 0.875rem;
  overflow: hidden;
  text-align: start;
  text-overflow: ellipsis;
  white-space: nowrap;
  pointer-events: none;
  border: 1px solid transparent;
  transform-origin: 0 0;
  transition: opacity 0.2s ease-in-out, transform 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-floating > label {
    transition: none;
  }
}
.form-floating > .form-control,
.form-floating > .form-control-plaintext {
  padding: 1rem 0.875rem;
}
.form-floating > .form-control::placeholder,
.form-floating > .form-control-plaintext::placeholder {
  color: transparent;
}
.form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown),
.form-floating > .form-control-plaintext:focus,
.form-floating > .form-control-plaintext:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:-webkit-autofill,
.form-floating > .form-control-plaintext:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-control-plaintext ~ label,
.form-floating > .form-select ~ label {
  opacity: 0.75;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:-webkit-autofill ~ label {
  opacity: 0.75;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control-plaintext ~ label {
  border-width: 1px 0;
}

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control,
.input-group > .form-select,
.input-group > .form-floating {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}
.input-group > .form-control:focus,
.input-group > .form-select:focus,
.input-group > .form-floating:focus-within {
  z-index: 5;
}
.input-group .btn {
  position: relative;
  z-index: 2;
}
.input-group .btn:focus {
  z-index: 5;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.4375rem 0.875rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.53;
  color: #697a8d;
  text-align: center;
  white-space: nowrap;
  background-color: #fff;
  border: 1px solid #d9dee3;
  border-radius: 0.375rem;
}

.input-group-lg > .form-control,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn {
  padding: 0.75rem 1.25rem;
  font-size: 1rem;
  border-radius: 0.5rem;
}

.input-group-sm > .form-control,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn {
  padding: 0.25rem 0.625rem;
  font-size: 0.75rem;
  border-radius: 0.25rem;
}

.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 2.75rem;
}

.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n+3),
.input-group:not(.has-validation) > .form-floating:not(:last-child) > .form-control,
.input-group:not(.has-validation) > .form-floating:not(:last-child) > .form-select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation > :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n+4),
.input-group.has-validation > .form-floating:nth-last-child(n+3) > .form-control,
.input-group.has-validation > .form-floating:nth-last-child(n+3) > .form-select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group > .form-floating:not(:first-child) > .form-control,
.input-group > .form-floating:not(:first-child) > .form-select {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.btn {
  --bs-btn-padding-x: 1.25rem;
  --bs-btn-padding-y: 0.4375rem;
  --bs-btn-font-family: ;
  --bs-btn-font-size: 0.9375rem;
  --bs-btn-font-weight: 400;
  --bs-btn-line-height: 1.53;
  --bs-btn-color: #697a8d;
  --bs-btn-bg: transparent;
  --bs-btn-border-width: 1px;
  --bs-btn-border-color: transparent;
  --bs-btn-border-radius: 0.375rem;
  --bs-btn-hover-border-color: transparent;
  --bs-btn-box-shadow: none;
  --bs-btn-disabled-opacity: 0.65;
  --bs-btn-focus-box-shadow: 0 0 0 0.05rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
  display: inline-block;
  padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
  font-family: var(--bs-btn-font-family);
  font-size: var(--bs-btn-font-size);
  font-weight: var(--bs-btn-font-weight);
  line-height: var(--bs-btn-line-height);
  color: var(--bs-btn-color);
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  user-select: none;
  border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
  border-radius: var(--bs-btn-border-radius);
  background-color: var(--bs-btn-bg);
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}

.btn:hover {
  color: var(--bs-btn-hover-color);
  background-color: var(--bs-btn-hover-bg);
  border-color: var(--bs-btn-hover-border-color);
}
.btn-check + .btn:hover {
  color: var(--bs-btn-color);
  background-color: var(--bs-btn-bg);
  border-color: var(--bs-btn-border-color);
}
.btn:focus-visible {
  color: var(--bs-btn-hover-color);
  background-color: var(--bs-btn-hover-bg);
  border-color: var(--bs-btn-hover-border-color);
  outline: 0;
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:focus-visible + .btn {
  border-color: var(--bs-btn-hover-border-color);
  outline: 0;
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:checked + .btn, :not(.btn-check) + .btn:active, .btn:first-child:active, .btn.active, .btn.show {
  color: var(--bs-btn-active-color);
  background-color: var(--bs-btn-active-bg);
  border-color: var(--bs-btn-active-border-color);
}
.btn-check:checked + .btn:focus-visible, :not(.btn-check) + .btn:active:focus-visible, .btn:first-child:active:focus-visible, .btn.active:focus-visible, .btn.show:focus-visible {
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn:disabled, .btn.disabled, fieldset:disabled .btn {
  color: var(--bs-btn-disabled-color);
  pointer-events: none;
  background-color: var(--bs-btn-disabled-bg);
  border-color: var(--bs-btn-disabled-border-color);
  opacity: var(--bs-btn-disabled-opacity);
}

.btn-link {
  --bs-btn-font-weight: 400;
  --bs-btn-color: var(--bs-link-color);
  --bs-btn-bg: transparent;
  --bs-btn-border-color: transparent;
  --bs-btn-hover-color: var(--bs-link-hover-color);
  --bs-btn-hover-border-color: transparent;
  --bs-btn-active-color: var(--bs-link-hover-color);
  --bs-btn-active-border-color: transparent;
  --bs-btn-disabled-color: rgba(67, 89, 113, 0.6);
  --bs-btn-disabled-border-color: transparent;
  --bs-btn-box-shadow: none;
  --bs-btn-focus-shadow-rgb: 128, 130, 255;
  text-decoration: none;
}
.btn-link:focus-visible {
  color: var(--bs-btn-color);
}
.btn-link:hover {
  color: var(--bs-btn-hover-color);
}

.btn-lg, .btn-group-lg > .btn {
  --bs-btn-padding-y: 0.75rem;
  --bs-btn-padding-x: 1.5rem;
  --bs-btn-font-size: 1rem;
  --bs-btn-border-radius: 0.5rem;
}

.btn-sm, .btn-group-sm > .btn {
  --bs-btn-padding-y: 0.25rem;
  --bs-btn-padding-x: 0.6875rem;
  --bs-btn-font-size: 0.75rem;
  --bs-btn-border-radius: 0.25rem;
}

.fade {
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    transition: none;
  }
}

.dropup,
.dropend,
.dropdown,
.dropstart,
.dropup-center,
.dropdown-center {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.5em;
  vertical-align: middle;
  content: "";
  margin-top: -0.28em;
  width: 0.42em;
  height: 0.42em;
  border: 1px solid;
  border-top: 0;
  border-left: 0;
  transform: rotate(45deg);
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  --bs-dropdown-zindex: 1000;
  --bs-dropdown-min-width: 12rem;
  --bs-dropdown-padding-x: 0;
  --bs-dropdown-padding-y: 0.3125rem;
  --bs-dropdown-spacer: 0.125rem;
  --bs-dropdown-font-size: 0.9375rem;
  --bs-dropdown-color: #697a8d;
  --bs-dropdown-bg: #fff;
  --bs-dropdown-border-color: transparent;
  --bs-dropdown-border-radius: 0.375rem;
  --bs-dropdown-border-width: 1px;
  --bs-dropdown-inner-border-radius: 0;
  --bs-dropdown-divider-bg: #d9dee3;
  --bs-dropdown-divider-margin-y: 0.5rem;
  --bs-dropdown-box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
  --bs-dropdown-link-color: #697a8d;
  --bs-dropdown-link-hover-color: #5f6e7f;
  --bs-dropdown-link-hover-bg: rgba(67, 89, 113, 0.04);
  --bs-dropdown-link-active-color: #fff;
  --bs-dropdown-link-active-bg: rgba(105, 108, 255, 0.08);
  --bs-dropdown-link-disabled-color: #c7cdd4;
  --bs-dropdown-item-padding-x: 1.25rem;
  --bs-dropdown-item-padding-y: 0.532rem;
  --bs-dropdown-header-color: #a1acb8;
  --bs-dropdown-header-padding-x: 1.25rem;
  --bs-dropdown-header-padding-y: 0.3125rem;
  position: absolute;
  z-index: var(--bs-dropdown-zindex);
  display: none;
  min-width: var(--bs-dropdown-min-width);
  padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
  margin: 0;
  font-size: var(--bs-dropdown-font-size);
  color: var(--bs-dropdown-color);
  text-align: left;
  list-style: none;
  background-color: var(--bs-dropdown-bg);
  background-clip: padding-box;
  border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
  border-radius: var(--bs-dropdown-border-radius);
}
.dropdown-menu[data-bs-popper] {
  top: 100%;
  left: 0;
  margin-top: var(--bs-dropdown-spacer);
}

.dropdown-menu-start {
  --bs-position: start;
}
.dropdown-menu-start[data-bs-popper] {
  right: auto;
  left: 0;
}

.dropdown-menu-end {
  --bs-position: end;
}
.dropdown-menu-end[data-bs-popper] {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start;
  }
  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-end {
    --bs-position: end;
  }
  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start;
  }
  .dropdown-menu-md-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-end {
    --bs-position: end;
  }
  .dropdown-menu-md-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start;
  }
  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-end {
    --bs-position: end;
  }
  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start;
  }
  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-end {
    --bs-position: end;
  }
  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start;
  }
  .dropdown-menu-xxl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xxl-end {
    --bs-position: end;
  }
  .dropdown-menu-xxl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: var(--bs-dropdown-spacer);
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.5em;
  vertical-align: middle;
  content: "";
  margin-top: 0;
  width: 0.42em;
  height: 0.42em;
  border: 1px solid;
  border-bottom: 0;
  border-left: 0;
  transform: rotate(-45deg);
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: var(--bs-dropdown-spacer);
}
.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.5em;
  vertical-align: middle;
  content: "";
  border-top: 0.42em solid transparent;
  border-right: 0;
  border-bottom: 0.42em solid transparent;
  border-left: 0.42em solid;
}
.dropend .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropend .dropdown-toggle::after {
  vertical-align: 0;
}

.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: var(--bs-dropdown-spacer);
}
.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.5em;
  vertical-align: middle;
  content: "";
}
.dropstart .dropdown-toggle::after {
  display: none;
}
.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.5em;
  vertical-align: middle;
  content: "";
  border-top: 0.42em solid transparent;
  border-right: 0.42em solid;
  border-bottom: 0.42em solid transparent;
}
.dropstart .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-divider {
  height: 0;
  margin: var(--bs-dropdown-divider-margin-y) 0;
  overflow: hidden;
  border-top: 1px solid var(--bs-dropdown-divider-bg);
  opacity: 1;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
  clear: both;
  font-weight: 400;
  color: var(--bs-dropdown-link-color);
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}
.dropdown-item:hover, .dropdown-item:focus {
  color: var(--bs-dropdown-link-hover-color);
  background-color: var(--bs-dropdown-link-hover-bg);
}
.dropdown-item.active, .dropdown-item:active {
  color: var(--bs-dropdown-link-active-color);
  text-decoration: none;
  background-color: var(--bs-dropdown-link-active-bg);
}
.dropdown-item.disabled, .dropdown-item:disabled {
  color: var(--bs-dropdown-link-disabled-color);
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: var(--bs-dropdown-header-padding-y) var(--bs-dropdown-header-padding-x);
  margin-bottom: 0;
  font-size: 0.75rem;
  color: var(--bs-dropdown-header-color);
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
  color: var(--bs-dropdown-link-color);
}

.dropdown-menu-dark {
  --bs-dropdown-color: rgba(67, 89, 113, 0.3);
  --bs-dropdown-bg: rgba(67, 89, 113, 0.8);
  --bs-dropdown-border-color: transparent;
  --bs-dropdown-box-shadow: ;
  --bs-dropdown-link-color: rgba(67, 89, 113, 0.3);
  --bs-dropdown-link-hover-color: #fff;
  --bs-dropdown-divider-bg: #d9dee3;
  --bs-dropdown-link-hover-bg: rgba(255, 255, 255, 0.15);
  --bs-dropdown-link-active-color: #fff;
  --bs-dropdown-link-active-bg: rgba(105, 108, 255, 0.08);
  --bs-dropdown-link-disabled-color: rgba(67, 89, 113, 0.5);
  --bs-dropdown-header-color: rgba(67, 89, 113, 0.5);
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  flex: 1 1 auto;
}
.btn-group > .btn-check:checked + .btn,
.btn-group > .btn-check:focus + .btn,
.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn-check:checked + .btn,
.btn-group-vertical > .btn-check:focus + .btn,
.btn-group-vertical > .btn:hover,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}

.btn-group {
  border-radius: 0.375rem;
}
.btn-group > :not(.btn-check:first-child) + .btn,
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn.dropdown-toggle-split:first-child,
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:nth-child(n+3),
.btn-group > :not(.btn-check) + .btn,
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.9375rem;
  padding-left: 0.9375rem;
}
.dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropend .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.515625rem;
  padding-left: 0.515625rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn ~ .btn,
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav {
  --bs-nav-link-padding-x: 1.25rem;
  --bs-nav-link-padding-y: 0.5rem;
  --bs-nav-link-font-weight: ;
  --bs-nav-link-color: #8e9baa;
  --bs-nav-link-hover-color: var(--bs-link-hover-color);
  --bs-nav-link-disabled-color: #c7cdd4;
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
  font-size: var(--bs-nav-link-font-size);
  font-weight: var(--bs-nav-link-font-weight);
  color: var(--bs-nav-link-color);
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .nav-link {
    transition: none;
  }
}
.nav-link:hover, .nav-link:focus {
  color: var(--bs-nav-link-hover-color);
}
.nav-link.disabled {
  color: var(--bs-nav-link-disabled-color);
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  --bs-nav-tabs-border-width: 1px;
  --bs-nav-tabs-border-color: #fff;
  --bs-nav-tabs-border-radius: 0.375rem;
  --bs-nav-tabs-link-hover-border-color: rgba(67, 89, 113, 0.1);
  --bs-nav-tabs-link-active-color: #697a8d;
  --bs-nav-tabs-link-active-bg: #fff;
  --bs-nav-tabs-link-active-border-color: #fff;
  border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color);
}
.nav-tabs .nav-link {
  margin-bottom: calc(-1 * var(--bs-nav-tabs-border-width));
  background: none;
  border: var(--bs-nav-tabs-border-width) solid transparent;
  border-top-left-radius: var(--bs-nav-tabs-border-radius);
  border-top-right-radius: var(--bs-nav-tabs-border-radius);
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  isolation: isolate;
  border-color: var(--bs-nav-tabs-link-hover-border-color);
}
.nav-tabs .nav-link.disabled, .nav-tabs .nav-link:disabled {
  color: var(--bs-nav-link-disabled-color);
  background-color: transparent;
  border-color: transparent;
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: var(--bs-nav-tabs-link-active-color);
  background-color: var(--bs-nav-tabs-link-active-bg);
  border-color: var(--bs-nav-tabs-link-active-border-color);
}
.nav-tabs .dropdown-menu {
  margin-top: calc(-1 * var(--bs-nav-tabs-border-width));
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills {
  --bs-nav-pills-border-radius: 0.375rem;
  --bs-nav-pills-link-active-color: #fff;
  --bs-nav-pills-link-active-bg: transparent;
}
.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: var(--bs-nav-pills-border-radius);
}
.nav-pills .nav-link:disabled {
  color: var(--bs-nav-link-disabled-color);
  background-color: transparent;
  border-color: transparent;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: var(--bs-nav-pills-link-active-color);
  background-color: var(--bs-nav-pills-link-active-bg);
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}

.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}

.navbar {
  --bs-navbar-padding-x: 0;
  --bs-navbar-padding-y: 0.5rem;
  --bs-navbar-color: rgba(67, 89, 113, 0.5);
  --bs-navbar-hover-color: #697a8d;
  --bs-navbar-disabled-color: rgba(67, 89, 113, 0.3);
  --bs-navbar-active-color: #697a8d;
  --bs-navbar-brand-padding-y: 0.4521875rem;
  --bs-navbar-brand-margin-end: 1rem;
  --bs-navbar-brand-font-size: 1rem;
  --bs-navbar-brand-color: #697a8d;
  --bs-navbar-brand-hover-color: #697a8d;
  --bs-navbar-nav-link-padding-x: 0.5rem;
  --bs-navbar-toggler-padding-y: 0;
  --bs-navbar-toggler-padding-x: 0;
  --bs-navbar-toggler-font-size: 0.75rem;
  --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12%29-Navbar' transform='translate%28-1174.000000, -1290.000000%29'%3E%3Cg id='Group' transform='translate%281174.000000, 1288.000000%29'%3E%3Cg id='Icon-Color' transform='translate%280.000000, 2.000000%29'%3E%3Cuse fill='rgba%2867, 89, 113, 0.5%29' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba%2867, 89, 113, 0.5%29' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  --bs-navbar-toggler-border-color: rgba(67, 89, 113, 0.06);
  --bs-navbar-toggler-border-radius: 0.375rem;
  --bs-navbar-toggler-focus-width: 0.05rem;
  --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
}
.navbar > .container,
.navbar > .container-fluid,
.navbar > .container-sm,
.navbar > .container-md,
.navbar > .container-lg,
.navbar > .container-xl,
.navbar > .container-xxl {
  display: flex;
  flex-wrap: inherit;
  align-items: center;
  justify-content: space-between;
}
.navbar-brand {
  padding-top: var(--bs-navbar-brand-padding-y);
  padding-bottom: var(--bs-navbar-brand-padding-y);
  margin-right: var(--bs-navbar-brand-margin-end);
  font-size: var(--bs-navbar-brand-font-size);
  color: var(--bs-navbar-brand-color);
  white-space: nowrap;
}
.navbar-brand:hover, .navbar-brand:focus {
  color: var(--bs-navbar-brand-hover-color);
}

.navbar-nav {
  --bs-nav-link-padding-x: 0;
  --bs-nav-link-padding-y: 0.5rem;
  --bs-nav-link-font-weight: ;
  --bs-nav-link-color: var(--bs-navbar-color);
  --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
  --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .show > .nav-link,
.navbar-nav .nav-link.active {
  color: var(--bs-navbar-active-color);
}
.navbar-nav .dropdown-menu {
  position: static;
}

.navbar-text {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: var(--bs-navbar-color);
}
.navbar-text a,
.navbar-text a:hover,
.navbar-text a:focus {
  color: var(--bs-navbar-active-color);
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
  font-size: var(--bs-navbar-toggler-font-size);
  line-height: 1;
  color: var(--bs-navbar-color);
  background-color: transparent;
  border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
  border-radius: var(--bs-navbar-toggler-border-radius);
  transition: var(--bs-navbar-toggler-transition);
}
@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    transition: none;
  }
}
.navbar-toggler:hover {
  text-decoration: none;
}
.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-image: var(--bs-navbar-toggler-icon-bg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto;
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1400px) {
  .navbar-expand-xxl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xxl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xxl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xxl .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-xxl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xxl .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
.navbar-expand {
  flex-wrap: nowrap;
  justify-content: flex-start;
}
.navbar-expand .navbar-nav {
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: var(--bs-navbar-nav-link-padding-x);
  padding-left: var(--bs-navbar-nav-link-padding-x);
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}
.navbar-expand .offcanvas {
  position: static;
  z-index: auto;
  flex-grow: 1;
  width: auto !important;
  height: auto !important;
  visibility: visible !important;
  background-color: transparent !important;
  border: 0 !important;
  transform: none !important;
  transition: none;
}
.navbar-expand .offcanvas .offcanvas-header {
  display: none;
}
.navbar-expand .offcanvas .offcanvas-body {
  display: flex;
  flex-grow: 0;
  padding: 0;
  overflow-y: visible;
}

.navbar-dark {
  --bs-navbar-color: rgba(255, 255, 255, 0.8);
  --bs-navbar-hover-color: #fff;
  --bs-navbar-disabled-color: rgba(255, 255, 255, 0.4);
  --bs-navbar-active-color: #fff;
  --bs-navbar-brand-color: #fff;
  --bs-navbar-brand-hover-color: #fff;
  --bs-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
  --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12%29-Navbar' transform='translate%28-1174.000000, -1290.000000%29'%3E%3Cg id='Group' transform='translate%281174.000000, 1288.000000%29'%3E%3Cg id='Icon-Color' transform='translate%280.000000, 2.000000%29'%3E%3Cuse fill='rgba%28255, 255, 255, 0.8%29' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba%28255, 255, 255, 0.8%29' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.card {
  --bs-card-spacer-y: 1.5rem;
  --bs-card-spacer-x: 1.5rem;
  --bs-card-title-spacer-y: 0.875rem;
  --bs-card-border-width: 0;
  --bs-card-border-color: #d9dee3;
  --bs-card-border-radius: 0.5rem;
  --bs-card-box-shadow: 0 2px 6px 0 rgba(67, 89, 113, 0.12);
  --bs-card-inner-border-radius: 0.5rem;
  --bs-card-cap-padding-y: 1.5rem;
  --bs-card-cap-padding-x: 1.5rem;
  --bs-card-cap-bg: transparent;
  --bs-card-cap-color: ;
  --bs-card-height: ;
  --bs-card-color: ;
  --bs-card-bg: #fff;
  --bs-card-img-overlay-padding: 1.5rem;
  --bs-card-group-margin: 0.8125rem;
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  height: var(--bs-card-height);
  word-wrap: break-word;
  background-color: var(--bs-card-bg);
  background-clip: border-box;
  border: var(--bs-card-border-width) solid var(--bs-card-border-color);
  border-radius: var(--bs-card-border-radius);
}

.card-id{
  height: 200px !important;
  width: 320px !important;
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: var(--bs-card-inner-border-radius);
  border-top-right-radius: var(--bs-card-inner-border-radius);
}
.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: var(--bs-card-inner-border-radius);
  border-bottom-left-radius: var(--bs-card-inner-border-radius);
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}

.card-body {
  flex: 1 1 auto;
  padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
  color: var(--bs-card-color);
}

.card-title {
  margin-bottom: var(--bs-card-title-spacer-y);
}

.card-subtitle {
  margin-top: calc(-0.5 * var(--bs-card-title-spacer-y));
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link + .card-link {
  margin-left: var(--bs-card-spacer-x);
}

.card-header {
  padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
  margin-bottom: 0;
  color: var(--bs-card-cap-color);
  background-color: var(--bs-card-cap-bg);
  border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-header:first-child {
  border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
}

.card-footer {
  padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
  color: var(--bs-card-cap-color);
  background-color: var(--bs-card-cap-bg);
  border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-footer:last-child {
  border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius);
}

.card-header-tabs {
  margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
  margin-bottom: calc(-1 * var(--bs-card-cap-padding-y));
  margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
  border-bottom: 0;
}
.card-header-tabs .nav-link.active {
  background-color: var(--bs-card-bg);
  border-bottom-color: var(--bs-card-bg);
}

.card-header-pills {
  margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
  margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: var(--bs-card-img-overlay-padding);
  border-radius: var(--bs-card-inner-border-radius);
}

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: var(--bs-card-inner-border-radius);
  border-top-right-radius: var(--bs-card-inner-border-radius);
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: var(--bs-card-inner-border-radius);
  border-bottom-left-radius: var(--bs-card-inner-border-radius);
}

.card-group > .card {
  margin-bottom: var(--bs-card-group-margin);
}
@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.accordion {
  --bs-accordion-color: #697a8d;
  --bs-accordion-bg: #fff;
  --bs-accordion-transition: all 0.2s ease-in-out, border-radius 0.15s ease;
  --bs-accordion-border-color: #d9dee3;
  --bs-accordion-border-width: 0;
  --bs-accordion-border-radius: 0.375rem;
  --bs-accordion-inner-border-radius: 0.375rem;
  --bs-accordion-btn-padding-x: 1.125rem;
  --bs-accordion-btn-padding-y: 0.79rem;
  --bs-accordion-btn-color: #566a7f;
  --bs-accordion-btn-bg: var(--bs-accordion-bg);
  --bs-accordion-btn-icon: url("data:image/svg+xml,%3Csvg width='12' height='12' viewBox='0 0 12 12' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath id='a' d='m1.532 12 6.182-6-6.182-6L0 1.487 4.65 6 0 10.513z'/%3E%3C/defs%3E%3Cg transform='translate%282.571%29' fill='none' fill-rule='evenodd'%3E%3Cuse fill='%23435971' xlink:href='%23a'/%3E%3Cuse fill-opacity='.1' fill='%23566a7f' xlink:href='%23a'/%3E%3C/g%3E%3C/svg%3E%0A");
  --bs-accordion-btn-icon-width: 0.75rem;
  --bs-accordion-btn-icon-transform: rotate(90deg);
  --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
  --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3Csvg width='12' height='12' viewBox='0 0 12 12' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath id='a' d='m1.532 12 6.182-6-6.182-6L0 1.487 4.65 6 0 10.513z'/%3E%3C/defs%3E%3Cg transform='translate%282.571%29' fill='none' fill-rule='evenodd'%3E%3Cuse fill='%23435971' xlink:href='%23a'/%3E%3Cuse fill-opacity='.1' fill='%23566a7f' xlink:href='%23a'/%3E%3C/g%3E%3C/svg%3E%0A");
  --bs-accordion-btn-focus-border-color: rgba(249, 249, 255, 0.54);
  --bs-accordion-btn-focus-box-shadow: none;
  --bs-accordion-body-padding-x: 1.125rem;
  --bs-accordion-body-padding-y: 0.79rem;
  --bs-accordion-active-color: #566a7f;
  --bs-accordion-active-bg: #fff;
}

.accordion-button {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
  font-size: 0.9375rem;
  color: var(--bs-accordion-btn-color);
  text-align: left;
  background-color: var(--bs-accordion-btn-bg);
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  transition: var(--bs-accordion-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button {
    transition: none;
  }
}
.accordion-button:not(.collapsed) {
  color: var(--bs-accordion-active-color);
  background-color: var(--bs-accordion-active-bg);
  box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
}
.accordion-button:not(.collapsed)::after {
  background-image: var(--bs-accordion-btn-active-icon);
  transform: var(--bs-accordion-btn-icon-transform);
}
.accordion-button::after {
  flex-shrink: 0;
  width: var(--bs-accordion-btn-icon-width);
  height: var(--bs-accordion-btn-icon-width);
  margin-left: auto;
  content: "";
  background-image: var(--bs-accordion-btn-icon);
  background-repeat: no-repeat;
  background-size: var(--bs-accordion-btn-icon-width);
  transition: var(--bs-accordion-btn-icon-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button::after {
    transition: none;
  }
}
.accordion-button:hover {
  z-index: 2;
}
.accordion-button:focus {
  z-index: 3;
  border-color: var(--bs-accordion-btn-focus-border-color);
  outline: 0;
  box-shadow: var(--bs-accordion-btn-focus-box-shadow);
}

.accordion-header {
  margin-bottom: 0;
}

.accordion-item {
  color: var(--bs-accordion-color);
  background-color: var(--bs-accordion-bg);
  border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
}
.accordion-item:first-of-type {
  border-top-left-radius: var(--bs-accordion-border-radius);
  border-top-right-radius: var(--bs-accordion-border-radius);
}
.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: var(--bs-accordion-inner-border-radius);
  border-top-right-radius: var(--bs-accordion-inner-border-radius);
}
.accordion-item:not(:first-of-type) {
  border-top: 0;
}
.accordion-item:last-of-type {
  border-bottom-right-radius: var(--bs-accordion-border-radius);
  border-bottom-left-radius: var(--bs-accordion-border-radius);
}
.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-right-radius: var(--bs-accordion-inner-border-radius);
  border-bottom-left-radius: var(--bs-accordion-inner-border-radius);
}
.accordion-item:last-of-type .accordion-collapse {
  border-bottom-right-radius: var(--bs-accordion-border-radius);
  border-bottom-left-radius: var(--bs-accordion-border-radius);
}

.accordion-body {
  padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x);
}

.accordion-flush .accordion-collapse {
  border-width: 0;
}
.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}
.accordion-flush .accordion-item:first-child {
  border-top: 0;
}
.accordion-flush .accordion-item:last-child {
  border-bottom: 0;
}
.accordion-flush .accordion-item .accordion-button, .accordion-flush .accordion-item .accordion-button.collapsed {
  border-radius: 0;
}

.breadcrumb {
  --bs-breadcrumb-padding-x: 0;
  --bs-breadcrumb-padding-y: 0;
  --bs-breadcrumb-margin-bottom: 1rem;
  --bs-breadcrumb-bg: transparent;
  --bs-breadcrumb-border-radius: ;
  --bs-breadcrumb-divider-color: #a1acb8;
  --bs-breadcrumb-item-padding-x: 0.5rem;
  --bs-breadcrumb-item-active-color: #697a8d;
  display: flex;
  flex-wrap: wrap;
  padding: var(--bs-breadcrumb-padding-y) var(--bs-breadcrumb-padding-x);
  margin-bottom: var(--bs-breadcrumb-margin-bottom);
  font-size: var(--bs-breadcrumb-font-size);
  list-style: none;
  background-color: var(--bs-breadcrumb-bg);
  border-radius: var(--bs-breadcrumb-border-radius);
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: var(--bs-breadcrumb-item-padding-x);
}
.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: var(--bs-breadcrumb-item-padding-x);
  color: var(--bs-breadcrumb-divider-color);
  content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "\\") */;
}
.breadcrumb-item.active {
  color: var(--bs-breadcrumb-item-active-color);
}

.pagination {
  --bs-pagination-padding-x: 0.5125rem;
  --bs-pagination-padding-y: 0.625rem;
  --bs-pagination-font-size: 0.9375rem;
  --bs-pagination-color: #697a8d;
  --bs-pagination-bg: #f0f2f4;
  --bs-pagination-border-width: 0px;
  --bs-pagination-border-color: #d9dee3;
  --bs-pagination-border-radius: 0.25rem;
  --bs-pagination-hover-color: #697a8d;
  --bs-pagination-hover-bg: #e1e4e8;
  --bs-pagination-hover-border-color: rgba(67, 89, 113, 0.3);
  --bs-pagination-focus-color: #697a8d;
  --bs-pagination-focus-bg: #e1e4e8;
  --bs-pagination-focus-box-shadow: none;
  --bs-pagination-active-color: #fff;
  --bs-pagination-active-bg: rgba(105, 108, 255, 0.08);
  --bs-pagination-active-border-color: rgba(105, 108, 255, 0.08);
  --bs-pagination-disabled-color: #a1acb8;
  --bs-pagination-disabled-bg: #f7f8f9;
  --bs-pagination-disabled-border-color: rgba(67, 89, 113, 0.3);
  display: flex;
  padding-left: 0;
  list-style: none;
}

.page-link {
  position: relative;
  display: block;
  padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
  font-size: var(--bs-pagination-font-size);
  color: var(--bs-pagination-color);
  background-color: var(--bs-pagination-bg);
  border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .page-link {
    transition: none;
  }
}
.page-link:hover {
  z-index: 2;
  color: var(--bs-pagination-hover-color);
  background-color: var(--bs-pagination-hover-bg);
  border-color: var(--bs-pagination-hover-border-color);
}
.page-link:focus {
  z-index: 3;
  color: var(--bs-pagination-focus-color);
  background-color: var(--bs-pagination-focus-bg);
  outline: 0;
  box-shadow: var(--bs-pagination-focus-box-shadow);
}
.page-link.active, .active > .page-link {
  z-index: 3;
  color: var(--bs-pagination-active-color);
  background-color: var(--bs-pagination-active-bg);
  border-color: var(--bs-pagination-active-border-color);
}
.page-link.disabled, .disabled > .page-link {
  color: var(--bs-pagination-disabled-color);
  pointer-events: none;
  background-color: var(--bs-pagination-disabled-bg);
  border-color: var(--bs-pagination-disabled-border-color);
}

.page-item:not(:first-child) .page-link {
  margin-left: 0.1875rem;
}
.page-item .page-link {
  border-radius: var(--bs-pagination-border-radius);
}

.pagination-lg {
  --bs-pagination-padding-x: 0.5rem;
  --bs-pagination-padding-y: 0.9375rem;
  --bs-pagination-font-size: 1rem;
  --bs-pagination-border-radius: 0.5rem;
}

.pagination-sm {
  --bs-pagination-padding-x: 0.25rem;
  --bs-pagination-padding-y: 0.375rem;
  --bs-pagination-font-size: 0.75rem;
  --bs-pagination-border-radius: 0.25rem;
}

.badge {
  --bs-badge-padding-x: 0.593em;
  --bs-badge-padding-y: 0.52em;
  --bs-badge-font-size: 0.8125em;
  --bs-badge-font-weight: 500;
  --bs-badge-color: #fff;
  --bs-badge-border-radius: 0.25rem;
  display: inline-block;
  padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
  font-size: 0.8rem;
  font-weight: var(--bs-badge-font-weight);
  line-height: 1;
  color: var(--bs-badge-color);
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: var(--bs-badge-border-radius);
}
.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.alert {
  --bs-alert-bg: transparent;
  --bs-alert-padding-x: 0.9375rem;
  --bs-alert-padding-y: 0.9375rem;
  --bs-alert-margin-bottom: 1rem;
  --bs-alert-color: inherit;
  --bs-alert-border-color: transparent;
  --bs-alert-border: 0 solid var(--bs-alert-border-color);
  --bs-alert-border-radius: 0.375rem;
  position: relative;
  padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
  margin-bottom: var(--bs-alert-margin-bottom);
  color: var(--bs-alert-color);
  background-color: var(--bs-alert-bg);
  border: var(--bs-alert-border);
  border-radius: var(--bs-alert-border-radius);
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 2.8125rem;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.171875rem 0.9375rem;
}

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 0.75rem;
  }
}
.progress {
  --bs-progress-height: 0.75rem;
  --bs-progress-font-size: 0.625rem;
  --bs-progress-bg: rgba(67, 89, 113, 0.1);
  --bs-progress-border-radius: 10rem;
  --bs-progress-box-shadow: inset 0 1px 2px rgba(67, 89, 113, 0.075);
  --bs-progress-bar-color: #fff;
  --bs-progress-bar-bg: #696cff;
  --bs-progress-bar-transition: width 0.6s ease;
  display: flex;
  height: var(--bs-progress-height);
  overflow: hidden;
  font-size: var(--bs-progress-font-size);
  background-color: var(--bs-progress-bg);
  border-radius: var(--bs-progress-border-radius);
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: var(--bs-progress-bar-color);
  text-align: center;
  white-space: nowrap;
  background-color: var(--bs-progress-bar-bg);
  transition: var(--bs-progress-bar-transition);
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: var(--bs-progress-height) var(--bs-progress-height);
}

.progress-bar-animated {
  animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    animation: none;
  }
}

.list-group {
  --bs-list-group-color: #697a8d;
  --bs-list-group-bg: transparent;
  --bs-list-group-border-color: #d9dee3;
  --bs-list-group-border-width: 1px;
  --bs-list-group-border-radius: 0.5rem;
  --bs-list-group-item-padding-x: 0.9375rem;
  --bs-list-group-item-padding-y: 0.58rem;
  --bs-list-group-action-color: #8e9baa;
  --bs-list-group-action-hover-color: #697a8d;
  --bs-list-group-action-hover-bg: rgba(67, 89, 113, 0.06);
  --bs-list-group-action-active-color: #697a8d;
  --bs-list-group-action-active-bg: rgba(67, 89, 113, 0.05);
  --bs-list-group-disabled-color: #c7cdd4;
  --bs-list-group-disabled-bg: transparent;
  --bs-list-group-active-color: #fff;
  --bs-list-group-active-bg: rgba(105, 108, 255, 0.08);
  --bs-list-group-active-border-color: rgba(105, 108, 255, 0.08);
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: var(--bs-list-group-border-radius);
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}
.list-group-numbered > .list-group-item::before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}

.list-group-item-action {
  width: 100%;
  color: var(--bs-list-group-action-color);
  text-align: inherit;
}
.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: var(--bs-list-group-action-hover-color);
  text-decoration: none;
  background-color: var(--bs-list-group-action-hover-bg);
}
.list-group-item-action:active {
  color: var(--bs-list-group-action-active-color);
  background-color: var(--bs-list-group-action-active-bg);
}

.list-group-item {
  position: relative;
  display: block;
  padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
  color: var(--bs-list-group-color);
  background-color: var(--bs-list-group-bg);
  border: var(--bs-list-group-border-width) solid var(--bs-list-group-border-color);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item.disabled, .list-group-item:disabled {
  color: var(--bs-list-group-disabled-color);
  pointer-events: none;
  background-color: var(--bs-list-group-disabled-bg);
}
.list-group-item.active {
  z-index: 2;
  color: var(--bs-list-group-active-color);
  background-color: var(--bs-list-group-active-bg);
  border-color: var(--bs-list-group-active-border-color);
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: calc(-1 * var(--bs-list-group-border-width));
  border-top-width: var(--bs-list-group-border-width);
}

.list-group-horizontal {
  flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child:not(:last-child) {
  border-bottom-left-radius: var(--bs-list-group-border-radius);
  border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child:not(:first-child) {
  border-top-right-radius: var(--bs-list-group-border-radius);
  border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: var(--bs-list-group-border-width);
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: calc(-1 * var(--bs-list-group-border-width));
  border-left-width: var(--bs-list-group-border-width);
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    flex-direction: row;
  }
  .list-group-horizontal-xxl > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
.list-group-flush {
  border-radius: 0;
}
.list-group-flush > .list-group-item {
  border-width: 0 0 var(--bs-list-group-border-width);
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.btn-close {
  box-sizing: content-box;
  width: 0.8em;
  height: 0.8em;
  padding: 0.25em 0.25em;
  color: #a1acb8;
  background: transparent url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate%28-225.000000, -250.000000%29'%3E%3Cg id='Icon-Color' transform='translate%28225.000000, 250.500000%29'%3E%3Cuse fill='%23a1acb8' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.5' fill='%23a1acb8' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E") center/0.8em auto no-repeat;
  border: 0;
  border-radius: 0.375rem;
  opacity: 0.95;
}
.btn-close:hover {
  color: #a1acb8;
  text-decoration: none;
  opacity: 0.95;
}
.btn-close:focus {
  outline: 0;
  box-shadow: none;
  opacity: 0.95;
}
.btn-close:disabled, .btn-close.disabled {
  pointer-events: none;
  user-select: none;
  opacity: 0.25;
}

.btn-close-white {
  filter: invert(1) grayscale(100%) brightness(200%);
}

.toast {
  --bs-toast-zindex: 1095;
  --bs-toast-padding-x: 1.25rem;
  --bs-toast-padding-y: 1.25rem;
  --bs-toast-spacing: 1.25rem;
  --bs-toast-max-width: 350px;
  --bs-toast-font-size: 0.9375rem;
  --bs-toast-color: ;
  --bs-toast-bg: #fff;
  --bs-toast-border-width: 0;
  --bs-toast-border-color: rgba(67, 89, 113, 0.1);
  --bs-toast-border-radius: 0.5rem;
  --bs-toast-box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
  --bs-toast-header-color: #697a8d;
  --bs-toast-header-bg: transparent;
  --bs-toast-header-border-color: transparent;
  width: var(--bs-toast-max-width);
  max-width: 100%;
  font-size: var(--bs-toast-font-size);
  color: var(--bs-toast-color);
  pointer-events: auto;
  background-color: var(--bs-toast-bg);
  background-clip: padding-box;
  border: var(--bs-toast-border-width) solid var(--bs-toast-border-color);
  box-shadow: var(--bs-toast-box-shadow);
  border-radius: var(--bs-toast-border-radius);
}
.toast.showing {
  opacity: 0;
}
.toast:not(.show) {
  display: none;
}

.toast-container {
  --bs-toast-zindex: 1095;
  position: absolute;
  z-index: var(--bs-toast-zindex);
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}
.toast-container > :not(:last-child) {
  margin-bottom: var(--bs-toast-spacing);
}

.toast-header {
  display: flex;
  align-items: center;
  padding: var(--bs-toast-padding-y) var(--bs-toast-padding-x);
  color: var(--bs-toast-header-color);
  background-color: var(--bs-toast-header-bg);
  background-clip: padding-box;
  border-bottom: var(--bs-toast-border-width) solid var(--bs-toast-header-border-color);
  border-top-left-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
  border-top-right-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
}
.toast-header .btn-close {
  margin-right: calc(-0.5 * var(--bs-toast-padding-x));
  margin-left: var(--bs-toast-padding-x);
}

.toast-body {
  padding: var(--bs-toast-padding-x);
  word-wrap: break-word;
}

.modal {
  --bs-modal-zindex: 1090;
  --bs-modal-width: 35rem;
  --bs-modal-padding: 1.5rem;
  --bs-modal-margin: 1.5rem;
  --bs-modal-color: ;
  --bs-modal-bg: #fff;
  --bs-modal-border-color: var(--bs-border-color-translucent);
  --bs-modal-border-width: 0px;
  --bs-modal-border-radius: 0.5rem;
  --bs-modal-box-shadow: 0 2px 16px 0 rgba(67, 89, 113, 0.45);
  --bs-modal-inner-border-radius: calc(0.5rem - 0px);
  --bs-modal-header-padding-x: 1.5rem;
  --bs-modal-header-padding-y: 0.25rem;
  --bs-modal-header-padding: 1.5rem 1.5rem 0.25rem;
  --bs-modal-header-border-color: var(--bs-border-color);
  --bs-modal-header-border-width: 0px;
  --bs-modal-title-line-height: 1.53;
  --bs-modal-footer-gap: 0.5rem;
  --bs-modal-footer-bg: ;
  --bs-modal-footer-border-color: var(--bs-border-color);
  --bs-modal-footer-border-width: 0px;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--bs-modal-zindex);
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: var(--bs-modal-margin);
  pointer-events: none;
}
.modal.fade .modal-dialog {
  transition: transform 0.15s ease-out;
  transform: translateY(-100px) scale(0.8);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}
.modal.show .modal-dialog {
  transform: translateY(0) scale(1);
}
.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}

.modal-dialog-scrollable {
  height: calc(100% - var(--bs-modal-margin) * 2);
}
.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - var(--bs-modal-margin) * 2);
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  color: var(--bs-modal-color);
  pointer-events: auto;
  background-color: var(--bs-modal-bg);
  background-clip: padding-box;
  border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
  border-radius: var(--bs-modal-border-radius);
  outline: 0;
}

.modal-backdrop {
  --bs-backdrop-zindex: 1089;
  --bs-backdrop-bg: #435971;
  --bs-backdrop-opacity: 0.5;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--bs-backdrop-zindex);
  width: 100vw;
  height: 100vh;
  background-color: var(--bs-backdrop-bg);
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: var(--bs-backdrop-opacity);
}

.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  justify-content: space-between;
  padding: var(--bs-modal-header-padding);
  border-bottom: var(--bs-modal-header-border-width) solid var(--bs-modal-header-border-color);
  border-top-left-radius: var(--bs-modal-inner-border-radius);
  border-top-right-radius: var(--bs-modal-inner-border-radius);
}
.modal-header .btn-close {
  padding: calc(var(--bs-modal-header-padding-y) * 0.5) calc(var(--bs-modal-header-padding-x) * 0.5);
  margin: calc(-0.5 * var(--bs-modal-header-padding-y)) calc(-0.5 * var(--bs-modal-header-padding-x)) calc(-0.5 * var(--bs-modal-header-padding-y)) auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: var(--bs-modal-title-line-height);
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: var(--bs-modal-padding);
}

.modal-footer {
  display: flex;
  flex-shrink: 0;
  flex-wrap: wrap;
  align-items: center;
  justify-content: flex-end;
  padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * 0.5);
  background-color: var(--bs-modal-footer-bg);
  border-top: var(--bs-modal-footer-border-width) solid var(--bs-modal-footer-border-color);
  border-bottom-right-radius: var(--bs-modal-inner-border-radius);
  border-bottom-left-radius: var(--bs-modal-inner-border-radius);
}
.modal-footer > * {
  margin: calc(var(--bs-modal-footer-gap) * 0.5);
}

@media (min-width: 576px) {
  .modal {
    --bs-modal-margin: 1.75rem;
    --bs-modal-box-shadow: 0 2px 20px 0 rgba(67, 89, 113, 0.45);
  }
  .modal-dialog {
    max-width: var(--bs-modal-width);
    margin-right: auto;
    margin-left: auto;
  }
  .modal-sm {
    --bs-modal-width: 22.5rem;
  }
}
@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    --bs-modal-width: 50rem;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    --bs-modal-width: 1140px;
  }
}
.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}
.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}
.modal-fullscreen .modal-header,
.modal-fullscreen .modal-footer {
  border-radius: 0;
}
.modal-fullscreen .modal-body {
  overflow-y: auto;
}

@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-header,
  .modal-fullscreen-sm-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-header,
  .modal-fullscreen-md-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-header,
  .modal-fullscreen-lg-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-header,
  .modal-fullscreen-xl-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-header,
  .modal-fullscreen-xxl-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto;
  }
}
.tooltip {
  --bs-tooltip-zindex: 1099;
  --bs-tooltip-max-width: 200px;
  --bs-tooltip-padding-x: 0.7rem;
  --bs-tooltip-padding-y: 0.25rem;
  --bs-tooltip-margin: ;
  --bs-tooltip-font-size: 0.9375rem;
  --bs-tooltip-color: #fff;
  --bs-tooltip-bg: #233446;
  --bs-tooltip-border-radius: 0.25rem;
  --bs-tooltip-opacity: 1;
  --bs-tooltip-arrow-width: 0.8rem;
  --bs-tooltip-arrow-height: 0.4rem;
  z-index: var(--bs-tooltip-zindex);
  display: block;
  padding: var(--bs-tooltip-arrow-height);
  margin: var(--bs-tooltip-margin);
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.53;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--bs-tooltip-font-size);
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: var(--bs-tooltip-opacity);
}
.tooltip .tooltip-arrow {
  display: block;
  width: var(--bs-tooltip-arrow-width);
  height: var(--bs-tooltip-arrow-height);
}
.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
  bottom: 0;
}
.bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
  top: -1px;
  border-width: var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
  border-top-color: var(--bs-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
  left: 0;
  width: var(--bs-tooltip-arrow-height);
  height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
  right: -1px;
  border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
  border-right-color: var(--bs-tooltip-bg);
}

/* rtl:end:ignore */
.bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
  top: 0;
}
.bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
  border-bottom-color: var(--bs-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
  right: 0;
  width: var(--bs-tooltip-arrow-height);
  height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
  left: -1px;
  border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
  border-left-color: var(--bs-tooltip-bg);
}

/* rtl:end:ignore */
.tooltip-inner {
  max-width: var(--bs-tooltip-max-width);
  padding: var(--bs-tooltip-padding-y) var(--bs-tooltip-padding-x);
  color: var(--bs-tooltip-color);
  text-align: center;
  background-color: var(--bs-tooltip-bg);
  border-radius: var(--bs-tooltip-border-radius);
}

.popover {
  --bs-popover-zindex: 1091;
  --bs-popover-max-width: 276px;
  --bs-popover-font-size: 0.9375rem;
  --bs-popover-bg: #fff;
  --bs-popover-border-width: 0px;
  --bs-popover-border-color: var(--bs-border-color-translucent);
  --bs-popover-border-radius: 0.5rem;
  --bs-popover-inner-border-radius: calc(0.5rem - 0px);
  --bs-popover-box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
  --bs-popover-header-padding-x: 1.125rem;
  --bs-popover-header-padding-y: 0;
  --bs-popover-header-font-size: 1.125rem;
  --bs-popover-header-color: #566a7f;
  --bs-popover-header-bg: transparent;
  --bs-popover-body-padding-x: 1.125rem;
  --bs-popover-body-padding-y: 1.125rem;
  --bs-popover-body-color: #697a8d;
  --bs-popover-arrow-width: 1rem;
  --bs-popover-arrow-height: 0.5rem;
  --bs-popover-arrow-border: var(--bs-popover-border-color);
  z-index: var(--bs-popover-zindex);
  display: block;
  max-width: var(--bs-popover-max-width);
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.53;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--bs-popover-font-size);
  word-wrap: break-word;
  background-color: var(--bs-popover-bg);
  background-clip: padding-box;
  border: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
  border-radius: var(--bs-popover-border-radius);
}
.popover .popover-arrow {
  display: block;
  width: var(--bs-popover-arrow-width);
  height: var(--bs-popover-arrow-height);
}
.popover .popover-arrow::before, .popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
  border-width: 0;
}

.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow {
  bottom: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before, .bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  border-width: var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before {
  bottom: 0;
  border-top-color: var(--bs-popover-arrow-border);
}
.bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  bottom: var(--bs-popover-border-width);
  border-top-color: var(--bs-popover-bg);
}

/* rtl:begin:ignore */
.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow {
  left: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
  width: var(--bs-popover-arrow-height);
  height: var(--bs-popover-arrow-width);
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before, .bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  border-width: calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before {
  left: 0;
  border-right-color: var(--bs-popover-arrow-border);
}
.bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  left: var(--bs-popover-border-width);
  border-right-color: var(--bs-popover-bg);
}

/* rtl:end:ignore */
.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow {
  top: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before, .bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  border-width: 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before {
  top: 0;
  border-bottom-color: var(--bs-popover-arrow-border);
}
.bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  top: var(--bs-popover-border-width);
  border-bottom-color: var(--bs-popover-bg);
}
.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: var(--bs-popover-arrow-width);
  margin-left: calc(-0.5 * var(--bs-popover-arrow-width));
  content: "";
  border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-header-bg);
}

/* rtl:begin:ignore */
.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow {
  right: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
  width: var(--bs-popover-arrow-height);
  height: var(--bs-popover-arrow-width);
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before, .bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  border-width: calc(var(--bs-popover-arrow-width) * 0.5) 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before {
  right: 0;
  border-left-color: var(--bs-popover-arrow-border);
}
.bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  right: var(--bs-popover-border-width);
  border-left-color: var(--bs-popover-bg);
}

/* rtl:end:ignore */
.popover-header {
  padding: var(--bs-popover-header-padding-y) var(--bs-popover-header-padding-x);
  margin-bottom: 0;
  font-size: var(--bs-popover-header-font-size);
  color: var(--bs-popover-header-color);
  background-color: var(--bs-popover-header-bg);
  border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
  border-top-left-radius: var(--bs-popover-inner-border-radius);
  border-top-right-radius: var(--bs-popover-inner-border-radius);
}
.popover-header:empty {
  display: none;
}

.popover-body {
  padding: var(--bs-popover-body-padding-y) var(--bs-popover-body-padding-x);
  color: var(--bs-popover-body-color);
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-start,
  .carousel-fade .active.carousel-item-end {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 14%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 1;
  transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}
.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 1;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2.55rem;
  height: 2.55rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
}

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: %23fff;transform: ;msFilter:;'%3E%3Cpath d='M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z'%3E%3C/path%3E%3C/svg%3E");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: %23fff;transform: ;msFilter:;'%3E%3Cpath d='M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z'%3E%3C/path%3E%3C/svg%3E");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: flex;
  justify-content: center;
  padding: 0;
  margin-right: 14%;
  margin-bottom: 1rem;
  margin-left: 14%;
  list-style: none;
}
.carousel-indicators [data-bs-target] {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-indicators [data-bs-target] {
    transition: none;
  }
}
.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #435971;
}
.carousel-dark .carousel-caption {
  color: #435971;
}

.spinner-grow,
.spinner-border {
  display: inline-block;
  width: var(--bs-spinner-width);
  height: var(--bs-spinner-height);
  vertical-align: var(--bs-spinner-vertical-align);
  border-radius: 50%;
  animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name);
}

@keyframes spinner-border {
  to {
    transform: rotate(360deg) /* rtl:ignore */;
  }
}
.spinner-border {
  --bs-spinner-width: 2rem;
  --bs-spinner-height: 2rem;
  --bs-spinner-vertical-align: -0.125em;
  --bs-spinner-border-width: 0.25em;
  --bs-spinner-animation-speed: 0.75s;
  --bs-spinner-animation-name: spinner-border;
  border: var(--bs-spinner-border-width) solid currentcolor;
  border-right-color: transparent;
}

.spinner-border-sm {
  --bs-spinner-width: 1rem;
  --bs-spinner-height: 1rem;
  --bs-spinner-border-width: 0.2em;
}

@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
.spinner-grow {
  --bs-spinner-width: 2rem;
  --bs-spinner-height: 2rem;
  --bs-spinner-vertical-align: -0.125em;
  --bs-spinner-animation-speed: 0.75s;
  --bs-spinner-animation-name: spinner-grow;
  background-color: currentcolor;
  opacity: 0;
}

.spinner-grow-sm {
  --bs-spinner-width: 1rem;
  --bs-spinner-height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    --bs-spinner-animation-speed: 1.5s;
  }
}
.offcanvas, .offcanvas-xxl, .offcanvas-xl, .offcanvas-lg, .offcanvas-md, .offcanvas-sm {
  --bs-offcanvas-zindex: 1090;
  --bs-offcanvas-width: 400px;
  --bs-offcanvas-height: 30vh;
  --bs-offcanvas-padding-x: 1.5rem;
  --bs-offcanvas-padding-y: 1.5rem;
  --bs-offcanvas-color: ;
  --bs-offcanvas-bg: #fff;
  --bs-offcanvas-border-width: 0px;
  --bs-offcanvas-border-color: var(--bs-border-color-translucent);
  --bs-offcanvas-box-shadow: 0 2px 16px 0 rgba(67, 89, 113, 0.45);
}

@media (max-width: 575.98px) {
  .offcanvas-sm {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: transform 0.25s ease-in-out;
  }
}
@media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-sm {
    transition: none;
  }
}
@media (max-width: 575.98px) {
  .offcanvas-sm.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
  .offcanvas-sm.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
  .offcanvas-sm.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
  .offcanvas-sm.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
  .offcanvas-sm.showing, .offcanvas-sm.show:not(.hiding) {
    transform: none;
  }
  .offcanvas-sm.showing, .offcanvas-sm.hiding, .offcanvas-sm.show {
    visibility: visible;
  }
}
@media (min-width: 576px) {
  .offcanvas-sm {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-sm .offcanvas-header {
    display: none;
  }
  .offcanvas-sm .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 767.98px) {
  .offcanvas-md {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: transform 0.25s ease-in-out;
  }
}
@media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-md {
    transition: none;
  }
}
@media (max-width: 767.98px) {
  .offcanvas-md.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
  .offcanvas-md.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
  .offcanvas-md.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
  .offcanvas-md.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
  .offcanvas-md.showing, .offcanvas-md.show:not(.hiding) {
    transform: none;
  }
  .offcanvas-md.showing, .offcanvas-md.hiding, .offcanvas-md.show {
    visibility: visible;
  }
}
@media (min-width: 768px) {
  .offcanvas-md {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-md .offcanvas-header {
    display: none;
  }
  .offcanvas-md .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 991.98px) {
  .offcanvas-lg {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: transform 0.25s ease-in-out;
  }
}
@media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-lg {
    transition: none;
  }
}
@media (max-width: 991.98px) {
  .offcanvas-lg.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
  .offcanvas-lg.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
  .offcanvas-lg.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
  .offcanvas-lg.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
  .offcanvas-lg.showing, .offcanvas-lg.show:not(.hiding) {
    transform: none;
  }
  .offcanvas-lg.showing, .offcanvas-lg.hiding, .offcanvas-lg.show {
    visibility: visible;
  }
}
@media (min-width: 992px) {
  .offcanvas-lg {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-lg .offcanvas-header {
    display: none;
  }
  .offcanvas-lg .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 1199.98px) {
  .offcanvas-xl {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: transform 0.25s ease-in-out;
  }
}
@media (max-width: 1199.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-xl {
    transition: none;
  }
}
@media (max-width: 1199.98px) {
  .offcanvas-xl.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
  .offcanvas-xl.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
  .offcanvas-xl.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
  .offcanvas-xl.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
  .offcanvas-xl.showing, .offcanvas-xl.show:not(.hiding) {
    transform: none;
  }
  .offcanvas-xl.showing, .offcanvas-xl.hiding, .offcanvas-xl.show {
    visibility: visible;
  }
}
@media (min-width: 1200px) {
  .offcanvas-xl {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-xl .offcanvas-header {
    display: none;
  }
  .offcanvas-xl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 1399.98px) {
  .offcanvas-xxl {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: transform 0.25s ease-in-out;
  }
}
@media (max-width: 1399.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-xxl {
    transition: none;
  }
}
@media (max-width: 1399.98px) {
  .offcanvas-xxl.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
  .offcanvas-xxl.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
  .offcanvas-xxl.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
  .offcanvas-xxl.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
  .offcanvas-xxl.showing, .offcanvas-xxl.show:not(.hiding) {
    transform: none;
  }
  .offcanvas-xxl.showing, .offcanvas-xxl.hiding, .offcanvas-xxl.show {
    visibility: visible;
  }
}
@media (min-width: 1400px) {
  .offcanvas-xxl {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-xxl .offcanvas-header {
    display: none;
  }
  .offcanvas-xxl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: var(--bs-offcanvas-zindex);
  display: flex;
  flex-direction: column;
  max-width: 100%;
  color: var(--bs-offcanvas-color);
  visibility: hidden;
  background-color: var(--bs-offcanvas-bg);
  background-clip: padding-box;
  outline: 0;
  transition: transform 0.25s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .offcanvas {
    transition: none;
  }
}
.offcanvas.offcanvas-start {
  top: 0;
  left: 0;
  width: var(--bs-offcanvas-width);
  border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  transform: translateX(-100%);
}
.offcanvas.offcanvas-end {
  top: 0;
  right: 0;
  width: var(--bs-offcanvas-width);
  border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  transform: translateX(100%);
}
.offcanvas.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: var(--bs-offcanvas-height);
  max-height: 100%;
  border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  transform: translateY(-100%);
}
.offcanvas.offcanvas-bottom {
  right: 0;
  left: 0;
  height: var(--bs-offcanvas-height);
  max-height: 100%;
  border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  transform: translateY(100%);
}
.offcanvas.showing, .offcanvas.show:not(.hiding) {
  transform: none;
}
.offcanvas.showing, .offcanvas.hiding, .offcanvas.show {
  visibility: visible;
}

.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1089;
  width: 100vw;
  height: 100vh;
  background-color: #435971;
}
.offcanvas-backdrop.fade {
  opacity: 0;
}
.offcanvas-backdrop.show {
  opacity: 0.5;
}

.offcanvas-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
}
.offcanvas-header .btn-close {
  padding: calc(var(--bs-offcanvas-padding-y) * 0.5) calc(var(--bs-offcanvas-padding-x) * 0.5);
  margin-top: calc(-0.5 * var(--bs-offcanvas-padding-y));
  margin-right: calc(-0.5 * var(--bs-offcanvas-padding-x));
  margin-bottom: calc(-0.5 * var(--bs-offcanvas-padding-y));
}

.offcanvas-title {
  margin-bottom: 0;
  line-height: 1.53;
}

.offcanvas-body {
  flex-grow: 1;
  padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
  overflow-y: auto;
}

.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentcolor;
  opacity: 0.5;
}
.placeholder.btn::before {
  display: inline-block;
  content: "";
}

.placeholder-xs {
  min-height: 0.6em;
}

.placeholder-sm {
  min-height: 0.8em;
}

.placeholder-lg {
  min-height: 1.2em;
}

.placeholder-glow .placeholder {
  animation: placeholder-glow 2s ease-in-out infinite;
}

@keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}
.placeholder-wave {
  mask-image: linear-gradient(130deg, #435971 55%, rgba(0, 0, 0, 0.8) 75%, #435971 95%);
  mask-size: 200% 100%;
  animation: placeholder-wave 2s linear infinite;
}

@keyframes placeholder-wave {
  100% {
    mask-position: -200% 0%;
  }
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.text-bg-primary {
  color: #fff !important;
  background-color: RGBA(105, 108, 255, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-secondary {
  color: #fff !important;
  background-color: RGBA(133, 146, 163, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-success {
  color: #fff !important;
  background-color: RGBA(113, 221, 55, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-info {
  color: #fff !important;
  background-color: RGBA(3, 195, 236, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-warning {
  color: #fff !important;
  background-color: RGBA(255, 171, 0, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-danger {
  color: #fff !important;
  background-color: RGBA(255, 62, 29, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-light {
  color: #435971 !important;
  background-color: RGBA(252, 253, 253, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-dark {
  color: #fff !important;
  background-color: RGBA(35, 52, 70, var(--bs-bg-opacity, 1)) !important;
}

.text-bg-gray {
  color: #fff !important;
  background-color: RGBA(67, 89, 113, var(--bs-bg-opacity, 1)) !important;
}

.link-primary {
  color: #696cff !important;
}
.link-primary:hover, .link-primary:focus {
  color: #5f61e6 !important;
}

.link-secondary {
  color: #8592a3 !important;
}
.link-secondary:hover, .link-secondary:focus {
  color: #788393 !important;
}

.link-success {
  color: #71dd37 !important;
}
.link-success:hover, .link-success:focus {
  color: #66c732 !important;
}

.link-info {
  color: #03c3ec !important;
}
.link-info:hover, .link-info:focus {
  color: #03b0d4 !important;
}

.link-warning {
  color: #ffab00 !important;
}
.link-warning:hover, .link-warning:focus {
  color: #e69a00 !important;
}

.link-danger {
  color: #ff3e1d !important;
}
.link-danger:hover, .link-danger:focus {
  color: #e6381a !important;
}

.link-light {
  color: #fcfdfd !important;
}
.link-light:hover, .link-light:focus {
  color: #fcfdfd !important;
}

.link-dark {
  color: #233446 !important;
}
.link-dark:hover, .link-dark:focus {
  color: #202f3f !important;
}

.link-gray {
  color: rgba(67, 89, 113, 0.1) !important;
}
.link-gray:hover, .link-gray:focus {
  color: rgba(22, 29, 36, 0.19) !important;
}

.ratio {
  position: relative;
  width: 100%;
}
.ratio::before {
  display: block;
  padding-top: var(--bs-aspect-ratio);
  content: "";
}
.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ratio-1x1 {
  --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
  --bs-aspect-ratio: 75%;
}

.ratio-16x9 {
  --bs-aspect-ratio: 56.25%;
}

.ratio-21x9 {
  --bs-aspect-ratio: 42.8571428571%;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1020;
}

.sticky-bottom {
  position: sticky;
  bottom: 0;
  z-index: 1020;
}

@media (min-width: 576px) {
  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-sm-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 768px) {
  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-md-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 992px) {
  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-lg-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 1200px) {
  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-xl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-xxl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
.hstack {
  display: flex;
  flex-direction: row;
  align-items: center;
  align-self: stretch;
}

.vstack {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  align-self: stretch;
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.vr {
  display: inline-block;
  align-self: stretch;
  width: 1px;
  min-height: 1em;
  background-color: currentcolor;
  opacity: 1;
}

:root {
  color-scheme: light;
}

b,
strong {
  font-weight: 700;
}

a:not([href]) {
  color: inherit;
  text-decoration: none;
}
a:not([href]):hover {
  color: inherit;
  text-decoration: none;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus,
input:-internal-autofill-selected {
  background-clip: text !important;
  -webkit-background-clip: text !important;
}

.row-bordered {
  overflow: hidden;
}
.row-bordered > .col,
.row-bordered > [class^=col-],
.row-bordered > [class*=" col-"],
.row-bordered > [class^="col "],
.row-bordered > [class*=" col "],
.row-bordered > [class$=" col"],
.row-bordered > [class=col] {
  position: relative;
  padding-top: 1px;
}
.row-bordered > .col::before,
.row-bordered > [class^=col-]::before,
.row-bordered > [class*=" col-"]::before,
.row-bordered > [class^="col "]::before,
.row-bordered > [class*=" col "]::before,
.row-bordered > [class$=" col"]::before,
.row-bordered > [class=col]::before {
  content: "";
  position: absolute;
  right: 0;
  bottom: -1px;
  left: 0;
  display: block;
  height: 0;
  border-top: 1px solid #d9dee3;
}
.row-bordered > .col::after,
.row-bordered > [class^=col-]::after,
.row-bordered > [class*=" col-"]::after,
.row-bordered > [class^="col "]::after,
.row-bordered > [class*=" col "]::after,
.row-bordered > [class$=" col"]::after,
.row-bordered > [class=col]::after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: -1px;
  display: block;
  width: 0;
  border-left: 1px solid #d9dee3;
}
.row-bordered.row-border-light > .col::before, .row-bordered.row-border-light > .col::after,
.row-bordered.row-border-light > [class^=col-]::before,
.row-bordered.row-border-light > [class^=col-]::after,
.row-bordered.row-border-light > [class*=" col-"]::before,
.row-bordered.row-border-light > [class*=" col-"]::after,
.row-bordered.row-border-light > [class^="col "]::before,
.row-bordered.row-border-light > [class^="col "]::after,
.row-bordered.row-border-light > [class*=" col "]::before,
.row-bordered.row-border-light > [class*=" col "]::after,
.row-bordered.row-border-light > [class$=" col"]::before,
.row-bordered.row-border-light > [class$=" col"]::after,
.row-bordered.row-border-light > [class=col]::before,
.row-bordered.row-border-light > [class=col]::after {
  border-color: rgba(67, 89, 113, 0.1);
}

.bg-label-secondary {
  background-color: #ebeef0 !important;
  color: #8592a3 !important;
}

.border-label-secondary {
  border: 3px solid #ced3da !important;
}

.border-light-secondary {
  border: 3px solid rgba(133, 146, 163, 0.08);
}

.bg-label-success {
  background-color: #e8fadf !important;
  color: #71dd37 !important;
}

.border-label-success {
  border: 3px solid #c6f1af !important;
}

.border-light-success {
  border: 3px solid rgba(113, 221, 55, 0.08);
}

.bg-label-info {
  background-color: #d7f5fc !important;
  color: #03c3ec !important;
}

.border-label-info {
  border: 3px solid #9ae7f7 !important;
}

.border-light-info {
  border: 3px solid rgba(3, 195, 236, 0.08);
}

.bg-label-warning {
  background-color: #fff2d6 !important;
  color: #ffab00 !important;
}

.border-label-warning {
  border: 3px solid #ffdd99 !important;
}

.border-light-warning {
  border: 3px solid rgba(255, 171, 0, 0.08);
}

.bg-label-danger {
  background-color: #ffe0db !important;
  color: #ff3e1d !important;
}

.border-label-danger {
  border: 3px solid #ffb2a5 !important;
}

.border-light-danger {
  border: 3px solid rgba(255, 62, 29, 0.08);
}

.bg-label-light {
  background-color: white !important;
  color: #fcfdfd !important;
}

.border-label-light {
  border: 3px solid #fefefe !important;
}

.border-light-light {
  border: 3px solid rgba(252, 253, 253, 0.08);
}

.bg-label-dark {
  background-color: #dcdfe1 !important;
  color: #233446 !important;
}

.border-label-dark {
  border: 3px solid #a7aeb5 !important;
}

.border-light-dark {
  border: 3px solid rgba(35, 52, 70, 0.08);
}

.bg-label-gray {
  background-color: rgba(253, 253, 254, 0.856) !important;
  color: rgba(67, 89, 113, 0.1) !important;
}

.border-label-gray {
  border: 3px solid rgba(249, 249, 250, 0.64) !important;
}

.border-light-gray {
  border: 3px solid rgba(67, 89, 113, 0.08);
}

a.bg-dark:hover, a.bg-dark:focus {
  background-color: rgba(67, 89, 113, 0.9) !important;
}

a.bg-light:hover, a.bg-light:focus {
  background-color: rgba(67, 89, 113, 0.2) !important;
}

a.bg-lighter:hover, a.bg-lighter:focus {
  background-color: rgba(67, 89, 113, 0.1) !important;
}

a.bg-lightest:hover, a.bg-lightest:focus {
  background-color: rgba(67, 89, 113, 0.05) !important;
}

.text-muted[href]:hover, .text-muted[href]:focus {
  color: #8e9baa !important;
}

.text-light {
  color: #b4bdc6 !important;
}
.text-light[href]:hover, .text-light[href]:focus {
  color: #8e9baa !important;
}

.text-lighter {
  color: #c7cdd4 !important;
}
.text-lighter[href]:hover, .text-lighter[href]:focus {
  color: #8e9baa !important;
}

.text-lightest {
  color: #d9dee3 !important;
}
.text-lightest[href]:hover, .text-lightest[href]:focus {
  color: #8e9baa !important;
}

.invert-text-white {
  color: #fff !important;
}

.invert-text-white[href]:hover:hover, .invert-text-white[href]:hover:focus {
  color: #fff !important;
}

.invert-text-dark {
  color: #435971 !important;
}

.invert-text-dark[href]:hover:hover, .invert-text-dark[href]:hover:focus {
  color: #435971 !important;
}

.invert-bg-white {
  background-color: #fff !important;
}

a.invert-bg-white:hover, a.invert-bg-white:focus {
  background-color: #fff !important;
}

.invert-bg-dark {
  background-color: rgba(67, 89, 113, 0.9) !important;
}

a.invert-bg-dark:hover, a.invert-bg-dark:focus {
  background-color: rgba(67, 89, 113, 0.9) !important;
}

.invert-border-dark {
  border-color: #233446 !important;
}

.invert-border-white {
  border-color: #fff !important;
}

.container-p-x {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}
@media (min-width: 992px) {
  .container-p-x {
    padding-right: 1.625rem !important;
    padding-left: 1.625rem !important;
  }
}

.container-m-nx {
  margin-right: -1rem !important;
  margin-left: -1rem !important;
}
@media (min-width: 992px) {
  .container-m-nx {
    margin-right: -1.625rem !important;
    margin-left: -1.625rem !important;
  }
}

.container-p-y:not([class^=pt-]):not([class*=" pt-"]) {
  padding-top: 1.625rem !important;
}
.container-p-y:not([class^=pb-]):not([class*=" pb-"]) {
  padding-bottom: 1.625rem !important;
}

.container-m-ny:not([class^=mt-]):not([class*=" mt-"]) {
  margin-top: -1.625rem !important;
}
.container-m-ny:not([class^=mb-]):not([class*=" mb-"]) {
  margin-bottom: -1.625rem !important;
}

.cell-fit {
  width: 0.1%;
  white-space: nowrap;
}

.table-secondary {
  --bs-table-bg: #e7e9ed;
  --bs-table-striped-bg: #e2e5e9;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #d7dbe1;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #dde0e6;
  --bs-table-hover-color: #435971;
  color: #435971;
  border-color: #d7dbe1;
}
.table-secondary th {
  border-bottom-color: inherit !important;
}
.table-secondary .btn-icon {
  color: #435971;
}

.table-success {
  --bs-table-bg: #e3f8d7;
  --bs-table-striped-bg: #def3d4;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #d3e8cd;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #d9eed1;
  --bs-table-hover-color: #435971;
  color: #435971;
  border-color: #d3e8cd;
}
.table-success th {
  border-bottom-color: inherit !important;
}
.table-success .btn-icon {
  color: #435971;
}

.table-info {
  --bs-table-bg: #cdf3fb;
  --bs-table-striped-bg: #c9eef7;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #bfe4ed;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #c5eaf3;
  --bs-table-hover-color: #435971;
  color: #435971;
  border-color: #bfe4ed;
}
.table-info th {
  border-bottom-color: inherit !important;
}
.table-info .btn-icon {
  color: #435971;
}

.table-warning {
  --bs-table-bg: #ffeecc;
  --bs-table-striped-bg: #f9eac9;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #ecdfc3;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #f4e5c7;
  --bs-table-hover-color: #435971;
  color: #435971;
  border-color: #ecdfc3;
}
.table-warning th {
  border-bottom-color: inherit !important;
}
.table-warning .btn-icon {
  color: #435971;
}

.table-danger {
  --bs-table-bg: #ffd8d2;
  --bs-table-striped-bg: #f9d4cf;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #eccbc8;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #f4d0cc;
  --bs-table-hover-color: #435971;
  color: #435971;
  border-color: #eccbc8;
}
.table-danger th {
  border-bottom-color: inherit !important;
}
.table-danger .btn-icon {
  color: #435971;
}

.table-light {
  --bs-table-bg: #fcfdfd;
  --bs-table-striped-bg: #f6f8f9;
  --bs-table-striped-color: #435971;
  --bs-table-active-bg: #eaedef;
  --bs-table-active-color: #435971;
  --bs-table-hover-bg: #f1f3f5;
  --bs-table-hover-color: #435971;
  color: #435971;
  border-color: #eaedef;
}
.table-light th {
  border-bottom-color: inherit !important;
}
.table-light .btn-icon {
  color: #435971;
}

.table-dark {
  --bs-table-bg: #233446;
  --bs-table-striped-bg: #2a3a4c;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #394859;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #304051;
  --bs-table-hover-color: #fff;
  color: #fff;
  border-color: #394859;
}
.table-dark th {
  border-bottom-color: #394859 !important;
}
.table-dark .btn-icon {
  color: #fff;
}

.table > :not(caption) > * > * {
  background-clip: padding-box;
}
.table tr > td .dropdown {
  position: static;
}

.card .table {
  margin-bottom: 0;
}

@supports (-moz-appearance: none) {
  .table .dropdown-menu.show {
    display: inline-table;
  }
}
.table th {
  text-transform: uppercase;
  font-size: 0.rem;
  letter-spacing: 1px;
}
.table:not(.table-dark) th {
  color: #566a7f;
}

.table-border-bottom-0 tr:last-child td,
.table-border-bottom-0 tr:last-child th {
  border-bottom-width: 0;
}

.table.table-dark .btn.btn-icon {
  color: #d9dee3;
}

.table-border-bottom-0 tr:last-child td,
.table-border-bottom-0 tr:last-child th {
  border-bottom-width: 0;
}

.table.table-flush-spacing thead tr > td:first-child,
.table.table-flush-spacing tbody tr > td:first-child {
  padding-left: 0;
}
.table.table-flush-spacing thead tr > td:last-child,
.table.table-flush-spacing tbody tr > td:last-child {
  padding-right: 0;
}

.nav-align-top .table:not(.table-dark),
.nav-align-top .table:not(.table-dark) thead:not(.table-dark) th,
.nav-align-top .table:not(.table-dark) tfoot:not(.table-dark) th,
.nav-align-top .table:not(.table-dark) td,
.nav-align-right .table:not(.table-dark),
.nav-align-right .table:not(.table-dark) thead:not(.table-dark) th,
.nav-align-right .table:not(.table-dark) tfoot:not(.table-dark) th,
.nav-align-right .table:not(.table-dark) td,
.nav-align-bottom .table:not(.table-dark),
.nav-align-bottom .table:not(.table-dark) thead:not(.table-dark) th,
.nav-align-bottom .table:not(.table-dark) tfoot:not(.table-dark) th,
.nav-align-bottom .table:not(.table-dark) td,
.nav-align-left .table:not(.table-dark),
.nav-align-left .table:not(.table-dark) thead:not(.table-dark) th,
.nav-align-left .table:not(.table-dark) tfoot:not(.table-dark) th,
.nav-align-left .table:not(.table-dark) td {
  border-color: #d9dee3;
}

.btn {
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}

.bx-icon{
  font-size: 2.5rem !important;
}

.btn .bx {
  line-height: 1.15;
}
.btn.disabled, .btn:disabled {
  cursor: default;
}

.btn .badge {
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn .badge {
    transition: none;
  }
}

label.btn {
  margin-bottom: 0;
}

.btn-xl, .btn-group-xl > .btn {
  --bs-btn-padding-y: 0.875rem;
  --bs-btn-padding-x: 2.125rem;
  --bs-btn-font-size: 1.25rem;
  --bs-btn-border-radius: 0.625rem;
}

.btn-xs, .btn-group-xs > .btn {
  --bs-btn-padding-y: 0;
  --bs-btn-padding-x: 0.5rem;
  --bs-btn-font-size: 0.75rem;
  --bs-btn-border-radius: 0.125rem;
}

.btn-secondary {
  color: #fff;
  background-color: #8592a3;
  border-color: #8592a3;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(133, 146, 163, 0.4);
}
.btn-secondary:hover {
  color: #fff !important;
  background-color: #788393 !important;
  border-color: #788393 !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-secondary, .btn-secondary:focus, .btn-secondary.focus {
  color: #fff;
  background-color: #788393;
  border-color: #788393;
  transform: translateY(0);
  box-shadow: none;
}
.btn-check:checked + .btn-secondary, .btn-check:active + .btn-secondary, .btn-secondary:active, .btn-secondary.active, .btn-secondary.show.dropdown-toggle, .show > .btn-secondary.dropdown-toggle {
  color: #fff !important;
  background-color: #717c8b !important;
  border-color: #717c8b !important;
}
.btn-check:checked + .btn-secondary:focus, .btn-check:active + .btn-secondary:focus, .btn-secondary:active:focus, .btn-secondary.active:focus, .btn-secondary.show.dropdown-toggle:focus, .show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: none;
}
.btn-secondary.disabled, .btn-secondary:disabled {
  color: #fff !important;
  background-color: #8592a3 !important;
  border-color: #8592a3 !important;
  box-shadow: none !important;
}

.btn-outline-secondary {
  color: #8592a3;
  border-color: #8592a3;
  background: transparent;
}
.btn-outline-secondary:hover {
  color: #fff !important;
  background-color: #788393 !important;
  border-color: #788393 !important;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(133, 146, 163, 0.4) !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-outline-secondary, .btn-outline-secondary:focus {
  color: #fff;
  background-color: #788393;
  border-color: #788393;
  box-shadow: none;
  transform: translateY(0);
}
.btn-check:checked + .btn-outline-secondary, .btn-check:active + .btn-outline-secondary, .btn-outline-secondary:active, .btn-outline-secondary.active, .btn-outline-secondary.dropdown-toggle.show {
  color: #fff !important;
  background-color: #717c8b !important;
  border-color: #717c8b !important;
}
.btn-check:checked + .btn-outline-secondary:focus, .btn-check:active + .btn-outline-secondary:focus, .btn-outline-secondary:active:focus, .btn-outline-secondary.active:focus, .btn-outline-secondary.dropdown-toggle.show:focus {
  box-shadow: none;
}
.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
  box-shadow: none !important;
  color: #8592a3 !important;
  background-color: transparent !important;
}

.btn-outline-secondary .badge {
  background: #8592a3;
  border-color: #8592a3;
  color: #fff;
}

.btn-outline-secondary:hover .badge,
.btn-outline-secondary:focus:hover .badge,
.btn-outline-secondary:active .badge,
.btn-outline-secondary.active .badge,
.show > .btn-outline-secondary.dropdown-toggle .badge {
  background: #fff;
  border-color: #fff;
  color: #8592a3;
}

.btn-success {
  color: #fff;
  background-color: #71dd37;
  border-color: #71dd37;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(113, 221, 55, 0.4);
}
.btn-success:hover {
  color: #fff !important;
  background-color: #66c732 !important;
  border-color: #66c732 !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-success, .btn-success:focus, .btn-success.focus {
  color: #fff;
  background-color: #66c732;
  border-color: #66c732;
  transform: translateY(0);
  box-shadow: none;
}
.btn-check:checked + .btn-success, .btn-check:active + .btn-success, .btn-success:active, .btn-success.active, .btn-success.show.dropdown-toggle, .show > .btn-success.dropdown-toggle {
  color: #fff !important;
  background-color: #60bc2f !important;
  border-color: #60bc2f !important;
}
.btn-check:checked + .btn-success:focus, .btn-check:active + .btn-success:focus, .btn-success:active:focus, .btn-success.active:focus, .btn-success.show.dropdown-toggle:focus, .show > .btn-success.dropdown-toggle:focus {
  box-shadow: none;
}
.btn-success.disabled, .btn-success:disabled {
  color: #fff !important;
  background-color: #71dd37 !important;
  border-color: #71dd37 !important;
  box-shadow: none !important;
}

.btn-outline-success {
  color: #71dd37;
  border-color: #71dd37;
  background: transparent;
}
.btn-outline-success:hover {
  color: #fff !important;
  background-color: #66c732 !important;
  border-color: #66c732 !important;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(113, 221, 55, 0.4) !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-outline-success, .btn-outline-success:focus {
  color: #fff;
  background-color: #66c732;
  border-color: #66c732;
  box-shadow: none;
  transform: translateY(0);
}
.btn-check:checked + .btn-outline-success, .btn-check:active + .btn-outline-success, .btn-outline-success:active, .btn-outline-success.active, .btn-outline-success.dropdown-toggle.show {
  color: #fff !important;
  background-color: #60bc2f !important;
  border-color: #60bc2f !important;
}
.btn-check:checked + .btn-outline-success:focus, .btn-check:active + .btn-outline-success:focus, .btn-outline-success:active:focus, .btn-outline-success.active:focus, .btn-outline-success.dropdown-toggle.show:focus {
  box-shadow: none;
}
.btn-outline-success.disabled, .btn-outline-success:disabled {
  box-shadow: none !important;
  color: #71dd37 !important;
  background-color: transparent !important;
}

.btn-outline-success .badge {
  background: #71dd37;
  border-color: #71dd37;
  color: #fff;
}

.btn-outline-success:hover .badge,
.btn-outline-success:focus:hover .badge,
.btn-outline-success:active .badge,
.btn-outline-success.active .badge,
.show > .btn-outline-success.dropdown-toggle .badge {
  background: #fff;
  border-color: #fff;
  color: #71dd37;
}

.btn-info {
  color: #fff;
  background-color: #03c3ec;
  border-color: #03c3ec;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(3, 195, 236, 0.4);
}
.btn-info:hover {
  color: #fff !important;
  background-color: #03b0d4 !important;
  border-color: #03b0d4 !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-info, .btn-info:focus, .btn-info.focus {
  color: #fff;
  background-color: #03b0d4;
  border-color: #03b0d4;
  transform: translateY(0);
  box-shadow: none;
}
.btn-check:checked + .btn-info, .btn-check:active + .btn-info, .btn-info:active, .btn-info.active, .btn-info.show.dropdown-toggle, .show > .btn-info.dropdown-toggle {
  color: #fff !important;
  background-color: #03a6c9 !important;
  border-color: #03a6c9 !important;
}
.btn-check:checked + .btn-info:focus, .btn-check:active + .btn-info:focus, .btn-info:active:focus, .btn-info.active:focus, .btn-info.show.dropdown-toggle:focus, .show > .btn-info.dropdown-toggle:focus {
  box-shadow: none;
}
.btn-info.disabled, .btn-info:disabled {
  color: #fff !important;
  background-color: #03c3ec !important;
  border-color: #03c3ec !important;
  box-shadow: none !important;
}

.btn-outline-info {
  color: #03c3ec;
  border-color: #03c3ec;
  background: transparent;
}
.btn-outline-info:hover {
  color: #fff !important;
  background-color: #03b0d4 !important;
  border-color: #03b0d4 !important;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(3, 195, 236, 0.4) !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-outline-info, .btn-outline-info:focus {
  color: #fff;
  background-color: #03b0d4;
  border-color: #03b0d4;
  box-shadow: none;
  transform: translateY(0);
}
.btn-check:checked + .btn-outline-info, .btn-check:active + .btn-outline-info, .btn-outline-info:active, .btn-outline-info.active, .btn-outline-info.dropdown-toggle.show {
  color: #fff !important;
  background-color: #03a6c9 !important;
  border-color: #03a6c9 !important;
}
.btn-check:checked + .btn-outline-info:focus, .btn-check:active + .btn-outline-info:focus, .btn-outline-info:active:focus, .btn-outline-info.active:focus, .btn-outline-info.dropdown-toggle.show:focus {
  box-shadow: none;
}
.btn-outline-info.disabled, .btn-outline-info:disabled {
  box-shadow: none !important;
  color: #03c3ec !important;
  background-color: transparent !important;
}

.btn-outline-info .badge {
  background: #03c3ec;
  border-color: #03c3ec;
  color: #fff;
}

.btn-outline-info:hover .badge,
.btn-outline-info:focus:hover .badge,
.btn-outline-info:active .badge,
.btn-outline-info.active .badge,
.show > .btn-outline-info.dropdown-toggle .badge {
  background: #fff;
  border-color: #fff;
  color: #03c3ec;
}

.btn-warning {
  color: #fff;
  background-color: #ffab00;
  border-color: #ffab00;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(255, 171, 0, 0.4);
}
.btn-warning:hover {
  color: #fff !important;
  background-color: #e69a00 !important;
  border-color: #e69a00 !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-warning, .btn-warning:focus, .btn-warning.focus {
  color: #fff;
  background-color: #e69a00;
  border-color: #e69a00;
  transform: translateY(0);
  box-shadow: none;
}
.btn-check:checked + .btn-warning, .btn-check:active + .btn-warning, .btn-warning:active, .btn-warning.active, .btn-warning.show.dropdown-toggle, .show > .btn-warning.dropdown-toggle {
  color: #fff !important;
  background-color: #d99100 !important;
  border-color: #d99100 !important;
}
.btn-check:checked + .btn-warning:focus, .btn-check:active + .btn-warning:focus, .btn-warning:active:focus, .btn-warning.active:focus, .btn-warning.show.dropdown-toggle:focus, .show > .btn-warning.dropdown-toggle:focus {
  box-shadow: none;
}
.btn-warning.disabled, .btn-warning:disabled {
  color: #fff !important;
  background-color: #ffab00 !important;
  border-color: #ffab00 !important;
  box-shadow: none !important;
}

.btn-outline-warning {
  color: #ffab00;
  border-color: #ffab00;
  background: transparent;
}
.btn-outline-warning:hover {
  color: #fff !important;
  background-color: #e69a00 !important;
  border-color: #e69a00 !important;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(255, 171, 0, 0.4) !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-outline-warning, .btn-outline-warning:focus {
  color: #fff;
  background-color: #e69a00;
  border-color: #e69a00;
  box-shadow: none;
  transform: translateY(0);
}
.btn-check:checked + .btn-outline-warning, .btn-check:active + .btn-outline-warning, .btn-outline-warning:active, .btn-outline-warning.active, .btn-outline-warning.dropdown-toggle.show {
  color: #fff !important;
  background-color: #d99100 !important;
  border-color: #d99100 !important;
}
.btn-check:checked + .btn-outline-warning:focus, .btn-check:active + .btn-outline-warning:focus, .btn-outline-warning:active:focus, .btn-outline-warning.active:focus, .btn-outline-warning.dropdown-toggle.show:focus {
  box-shadow: none;
}
.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  box-shadow: none !important;
  color: #ffab00 !important;
  background-color: transparent !important;
}

.btn-outline-warning .badge {
  background: #ffab00;
  border-color: #ffab00;
  color: #fff;
}

.btn-outline-warning:hover .badge,
.btn-outline-warning:focus:hover .badge,
.btn-outline-warning:active .badge,
.btn-outline-warning.active .badge,
.show > .btn-outline-warning.dropdown-toggle .badge {
  background: #fff;
  border-color: #fff;
  color: #ffab00;
}

.btn-danger {
  color: #fff;
  background-color: #ff3e1d;
  border-color: #ff3e1d;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(255, 62, 29, 0.4);
}
.btn-danger:hover {
  color: #fff !important;
  background-color: #e6381a !important;
  border-color: #e6381a !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-danger, .btn-danger:focus, .btn-danger.focus {
  color: #fff;
  background-color: #e6381a;
  border-color: #e6381a;
  transform: translateY(0);
  box-shadow: none;
}
.btn-check:checked + .btn-danger, .btn-check:active + .btn-danger, .btn-danger:active, .btn-danger.active, .btn-danger.show.dropdown-toggle, .show > .btn-danger.dropdown-toggle {
  color: #fff !important;
  background-color: #d93519 !important;
  border-color: #d93519 !important;
}
.btn-check:checked + .btn-danger:focus, .btn-check:active + .btn-danger:focus, .btn-danger:active:focus, .btn-danger.active:focus, .btn-danger.show.dropdown-toggle:focus, .show > .btn-danger.dropdown-toggle:focus {
  box-shadow: none;
}
.btn-danger.disabled, .btn-danger:disabled {
  color: #fff !important;
  background-color: #ff3e1d !important;
  border-color: #ff3e1d !important;
  box-shadow: none !important;
}

.btn-outline-danger {
  color: #ff3e1d;
  border-color: #ff3e1d;
  background: transparent;
}
.btn-outline-danger:hover {
  color: #fff !important;
  background-color: #e6381a !important;
  border-color: #e6381a !important;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(255, 62, 29, 0.4) !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-outline-danger, .btn-outline-danger:focus {
  color: #fff;
  background-color: #e6381a;
  border-color: #e6381a;
  box-shadow: none;
  transform: translateY(0);
}
.btn-check:checked + .btn-outline-danger, .btn-check:active + .btn-outline-danger, .btn-outline-danger:active, .btn-outline-danger.active, .btn-outline-danger.dropdown-toggle.show {
  color: #fff !important;
  background-color: #d93519 !important;
  border-color: #d93519 !important;
}
.btn-check:checked + .btn-outline-danger:focus, .btn-check:active + .btn-outline-danger:focus, .btn-outline-danger:active:focus, .btn-outline-danger.active:focus, .btn-outline-danger.dropdown-toggle.show:focus {
  box-shadow: none;
}
.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  box-shadow: none !important;
  color: #ff3e1d !important;
  background-color: transparent !important;
}

.btn-outline-danger .badge {
  background: #ff3e1d;
  border-color: #ff3e1d;
  color: #fff;
}

.btn-outline-danger:hover .badge,
.btn-outline-danger:focus:hover .badge,
.btn-outline-danger:active .badge,
.btn-outline-danger.active .badge,
.show > .btn-outline-danger.dropdown-toggle .badge {
  background: #fff;
  border-color: #fff;
  color: #ff3e1d;
}

.btn-light {
  color: #435971;
  background-color: #fcfdfd;
  border-color: #fcfdfd;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(252, 253, 253, 0.4);
}
.btn-light:hover {
  color: #435971 !important;
  background-color: #fcfdfd !important;
  border-color: #fcfdfd !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-light, .btn-light:focus, .btn-light.focus {
  color: #435971;
  background-color: #fcfdfd;
  border-color: #fcfdfd;
  transform: translateY(0);
  box-shadow: none;
}
.btn-check:checked + .btn-light, .btn-check:active + .btn-light, .btn-light:active, .btn-light.active, .btn-light.show.dropdown-toggle, .show > .btn-light.dropdown-toggle {
  color: #435971 !important;
  background-color: #fcfdfd !important;
  border-color: #fcfdfd !important;
}
.btn-check:checked + .btn-light:focus, .btn-check:active + .btn-light:focus, .btn-light:active:focus, .btn-light.active:focus, .btn-light.show.dropdown-toggle:focus, .show > .btn-light.dropdown-toggle:focus {
  box-shadow: none;
}
.btn-light.disabled, .btn-light:disabled {
  color: #435971 !important;
  background-color: #fcfdfd !important;
  border-color: #fcfdfd !important;
  box-shadow: none !important;
}

.btn-outline-light {
  color: #fcfdfd;
  border-color: #fcfdfd;
  background: transparent;
}
.btn-outline-light:hover {
  color: #435971 !important;
  background-color: #fcfdfd !important;
  border-color: #fcfdfd !important;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(252, 253, 253, 0.4) !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-outline-light, .btn-outline-light:focus {
  color: #435971;
  background-color: #fcfdfd;
  border-color: #fcfdfd;
  box-shadow: none;
  transform: translateY(0);
}
.btn-check:checked + .btn-outline-light, .btn-check:active + .btn-outline-light, .btn-outline-light:active, .btn-outline-light.active, .btn-outline-light.dropdown-toggle.show {
  color: #435971 !important;
  background-color: #fcfdfd !important;
  border-color: #fcfdfd !important;
}
.btn-check:checked + .btn-outline-light:focus, .btn-check:active + .btn-outline-light:focus, .btn-outline-light:active:focus, .btn-outline-light.active:focus, .btn-outline-light.dropdown-toggle.show:focus {
  box-shadow: none;
}
.btn-outline-light.disabled, .btn-outline-light:disabled {
  box-shadow: none !important;
  color: #fcfdfd !important;
  background-color: transparent !important;
}

.btn-outline-light .badge {
  background: #fcfdfd;
  border-color: #fcfdfd;
  color: #435971;
}

.btn-outline-light:hover .badge,
.btn-outline-light:focus:hover .badge,
.btn-outline-light:active .badge,
.btn-outline-light.active .badge,
.show > .btn-outline-light.dropdown-toggle .badge {
  background: #435971;
  border-color: #435971;
  color: #fcfdfd;
}

.btn-dark {
  color: #fff;
  background-color: #233446;
  border-color: #233446;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(35, 52, 70, 0.4);
}
.btn-dark:hover {
  color: #fff !important;
  background-color: #202f3f !important;
  border-color: #202f3f !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-dark, .btn-dark:focus, .btn-dark.focus {
  color: #fff;
  background-color: #202f3f;
  border-color: #202f3f;
  transform: translateY(0);
  box-shadow: none;
}
.btn-check:checked + .btn-dark, .btn-check:active + .btn-dark, .btn-dark:active, .btn-dark.active, .btn-dark.show.dropdown-toggle, .show > .btn-dark.dropdown-toggle {
  color: #fff !important;
  background-color: #1e2c3c !important;
  border-color: #1e2c3c !important;
}
.btn-check:checked + .btn-dark:focus, .btn-check:active + .btn-dark:focus, .btn-dark:active:focus, .btn-dark.active:focus, .btn-dark.show.dropdown-toggle:focus, .show > .btn-dark.dropdown-toggle:focus {
  box-shadow: none;
}
.btn-dark.disabled, .btn-dark:disabled {
  color: #fff !important;
  background-color: #233446 !important;
  border-color: #233446 !important;
  box-shadow: none !important;
}

.btn-outline-dark {
  color: #233446;
  border-color: #233446;
  background: transparent;
}
.btn-outline-dark:hover {
  color: #fff !important;
  background-color: #202f3f !important;
  border-color: #202f3f !important;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(35, 52, 70, 0.4) !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-outline-dark, .btn-outline-dark:focus {
  color: #fff;
  background-color: #202f3f;
  border-color: #202f3f;
  box-shadow: none;
  transform: translateY(0);
}
.btn-check:checked + .btn-outline-dark, .btn-check:active + .btn-outline-dark, .btn-outline-dark:active, .btn-outline-dark.active, .btn-outline-dark.dropdown-toggle.show {
  color: #fff !important;
  background-color: #1e2c3c !important;
  border-color: #1e2c3c !important;
}
.btn-check:checked + .btn-outline-dark:focus, .btn-check:active + .btn-outline-dark:focus, .btn-outline-dark:active:focus, .btn-outline-dark.active:focus, .btn-outline-dark.dropdown-toggle.show:focus {
  box-shadow: none;
}
.btn-outline-dark.disabled, .btn-outline-dark:disabled {
  box-shadow: none !important;
  color: #233446 !important;
  background-color: transparent !important;
}

.btn-outline-dark .badge {
  background: #233446;
  border-color: #233446;
  color: #fff;
}

.btn-outline-dark:hover .badge,
.btn-outline-dark:focus:hover .badge,
.btn-outline-dark:active .badge,
.btn-outline-dark.active .badge,
.show > .btn-outline-dark.dropdown-toggle .badge {
  background: #fff;
  border-color: #fff;
  color: #233446;
}

.btn-gray {
  color: #fff;
  background-color: rgba(67, 89, 113, 0.1);
  border-color: rgba(67, 89, 113, 0.1);
  box-shadow: 0 0.125rem 0.25rem 0 rgba(67, 89, 113, 0.4);
}
.btn-gray:hover {
  color: #fff !important;
  background-color: rgba(22, 29, 36, 0.19) !important;
  border-color: rgba(22, 29, 36, 0.19) !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-gray, .btn-gray:focus, .btn-gray.focus {
  color: #fff;
  background-color: rgba(22, 29, 36, 0.19);
  border-color: rgba(22, 29, 36, 0.19);
  transform: translateY(0);
  box-shadow: none;
}
.btn-check:checked + .btn-gray, .btn-check:active + .btn-gray, .btn-gray:active, .btn-gray.active, .btn-gray.show.dropdown-toggle, .show > .btn-gray.dropdown-toggle {
  color: #fff !important;
  background-color: rgba(15, 20, 26, 0.235) !important;
  border-color: rgba(15, 20, 26, 0.235) !important;
}
.btn-check:checked + .btn-gray:focus, .btn-check:active + .btn-gray:focus, .btn-gray:active:focus, .btn-gray.active:focus, .btn-gray.show.dropdown-toggle:focus, .show > .btn-gray.dropdown-toggle:focus {
  box-shadow: none;
}
.btn-gray.disabled, .btn-gray:disabled {
  color: #fff !important;
  background-color: rgba(67, 89, 113, 0.1) !important;
  border-color: rgba(67, 89, 113, 0.1) !important;
  box-shadow: none !important;
}

.btn-outline-gray {
  color: rgba(67, 89, 113, 0.1);
  border-color: rgba(67, 89, 113, 0.1);
  background: transparent;
}
.btn-outline-gray:hover {
  color: #fff !important;
  background-color: rgba(22, 29, 36, 0.19) !important;
  border-color: rgba(22, 29, 36, 0.19) !important;
  box-shadow: 0 0.125rem 0.25rem 0 rgba(67, 89, 113, 0.4) !important;
  transform: translateY(-1px) !important;
}
.btn-check:focus + .btn-outline-gray, .btn-outline-gray:focus {
  color: #fff;
  background-color: rgba(22, 29, 36, 0.19);
  border-color: rgba(22, 29, 36, 0.19);
  box-shadow: none;
  transform: translateY(0);
}
.btn-check:checked + .btn-outline-gray, .btn-check:active + .btn-outline-gray, .btn-outline-gray:active, .btn-outline-gray.active, .btn-outline-gray.dropdown-toggle.show {
  color: #fff !important;
  background-color: rgba(15, 20, 26, 0.235) !important;
  border-color: rgba(15, 20, 26, 0.235) !important;
}
.btn-check:checked + .btn-outline-gray:focus, .btn-check:active + .btn-outline-gray:focus, .btn-outline-gray:active:focus, .btn-outline-gray.active:focus, .btn-outline-gray.dropdown-toggle.show:focus {
  box-shadow: none;
}
.btn-outline-gray.disabled, .btn-outline-gray:disabled {
  box-shadow: none !important;
  color: rgba(67, 89, 113, 0.1) !important;
  background-color: transparent !important;
}

.btn-outline-gray .badge {
  background: rgba(67, 89, 113, 0.1);
  border-color: rgba(67, 89, 113, 0.1);
  color: #fff;
}

.btn-outline-gray:hover .badge,
.btn-outline-gray:focus:hover .badge,
.btn-outline-gray:active .badge,
.btn-outline-gray.active .badge,
.show > .btn-outline-gray.dropdown-toggle .badge {
  background: #fff;
  border-color: #fff;
  color: #435971;
}

.btn-icon {
  --bs-btn-active-border-color: transparent;
  padding: 0;
  width: calc(2.309375rem + 2px);
  height: calc(2.309375rem + 2px);
  display: inline-flex;
  flex-shrink: 0;
  justify-content: center;
  align-items: center;
}
.btn-icon.btn-xl, .btn-group-xl > .btn-icon.btn {
  width: calc(3.625rem + 2px);
  height: calc(3.625rem + 2px);
}
.btn-icon.btn-xl > span, .btn-group-xl > .btn-icon.btn > span {
  font-size: 1.25rem;
}
.btn-icon.btn-lg, .btn-group-lg > .btn-icon.btn {
  width: calc(3rem + 2px);
  height: calc(3rem + 2px);
  font-size: 1rem;
}
.btn-icon.btn-sm, .btn-group-sm > .btn-icon.btn {
  width: calc(1.625rem + 2px);
  height: calc(1.625rem + 2px);
  font-size: 0.75rem;
}
.btn-icon.btn-xs, .btn-group-xs > .btn-icon.btn {
  width: calc(1.125rem + 2px);
  height: calc(1.125rem + 2px);
  font-size: 0.75rem;
}

.btn.borderless:not(.active):not(:active):not(:hover):not(:focus), :not(.show) > .btn.borderless.dropdown-toggle:not(:hover):not(:focus) {
  border-color: transparent;
  box-shadow: none;
}

.btn.btn-link {
  font-size: inherit;
}

.btn-pinned {
  position: absolute;
  top: 0.75rem;
  right: 0.75rem;
}

button:focus,
button:focus-visible {
  outline: none;
}

.btn:not([class*=btn-]):active,
.btn:not([class*=btn-]).active,
.btn:not([class*=btn-]).show,
.btn:not([class*=btn-]) {
  border: none;
}

.dropdown-toggle-split,
.btn-lg + .dropdown-toggle-split,
.btn-group-lg > .btn + .dropdown-toggle-split,
.input-group-lg .btn + .dropdown-toggle-split,
.btn-xl + .dropdown-toggle-split,
.btn-group-xl > .btn + .dropdown-toggle-split {
  padding-right: 0.7em;
  padding-left: 0.7em;
}

.btn-sm + .dropdown-toggle-split,
.btn-group-sm > .btn + .dropdown-toggle-split,
.input-group-sm .btn + .dropdown-toggle-split {
  padding-right: 0.6em;
  padding-left: 0.6em;
}

.btn-xs + .dropdown-toggle-split,
.btn-group-xs > .btn + .dropdown-toggle-split {
  padding-right: 0.5em;
  padding-left: 0.5em;
}

.btn-group > .btn-group:first-child > .btn:not([class*=btn-outline-]):first-child,
.input-group > .btn:not([class*=btn-outline-]):first-child,
:not(.btn-group):not(.input-group) > .btn-group > .btn:not([class*=btn-outline-]):first-child,
.input-group > .btn-group:first-child > .btn:not([class*=btn-outline-]):first-child {
  border-left-color: transparent;
}

.btn-group > .btn-group:last-child > .btn:not([class*=btn-outline-]):last-of-type,
.input-group > .btn:not([class*=btn-outline-]):last-of-type,
:not(.btn-group):not(.input-group) > .btn-group > .btn:not([class*=btn-outline-]):last-of-type,
.input-group > .btn-group:last-child > .btn:not([class*=btn-outline-]):last-of-type {
  border-right-color: transparent;
}

.badge {
  text-transform: uppercase;
  line-height: 0.75;
}

.badge-center {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  height: 1.5rem;
  width: 1.5rem;
  font-size: 0.8125em;
}
.badge-center i {
  font-size: 0.8rem;
}

[data-trigger=hover] {
  outline: 0;
}

.dropdown-menu {
  box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
}
.mega-dropdown > .dropdown-menu {
  left: 0 !important;
  right: 0 !important;
}
.dropdown-menu .badge[class^=float-],
.dropdown-menu .badge[class*=" float-"] {
  position: relative;
  top: 0.071em;
}

.dropdown-item {
  line-height: 1.54;
}

.dropdown-toggle.hide-arrow::before, .dropdown-toggle.hide-arrow::after,
.dropdown-toggle-hide-arrow > .dropdown-toggle::before,
.dropdown-toggle-hide-arrow > .dropdown-toggle::after {
  display: none;
}

.dropdown-toggle::after {
  margin-top: -0.28em;
  width: 0.42em;
  height: 0.42em;
  border: 1px solid;
  border-top: 0;
  border-left: 0;
  transform: rotate(45deg);
}

.dropend .dropdown-toggle::after {
  margin-top: -0.168em;
  width: 0.42em;
  height: 0.42em;
  border: 1px solid;
  border-top: 0;
  border-left: 0;
  transform: rotate(-45deg);
}

.dropstart .dropdown-toggle::before {
  margin-top: -0.168em;
  width: 0.42em;
  height: 0.42em;
  border: 1px solid;
  border-top: 0;
  border-right: 0;
  transform: rotate(45deg);
}

.dropup .dropdown-toggle::after {
  margin-top: 0;
  width: 0.42em;
  height: 0.42em;
  border: 1px solid;
  border-bottom: 0;
  border-left: 0;
  transform: rotate(-45deg);
}

.dropstart .dropdown-toggle::before,
.dropend .dropdown-toggle::after {
  vertical-align: middle;
}

.nav .nav-item,
.nav .nav-link,
.tab-pane,
.tab-pane .card-body {
  outline: none !important;
}

.nav-tabs .nav-item .nav-link {
  color: #566a7f;
  border: 0;
  border-radius: 0;
}
.nav-tabs .nav-item .nav-link:hover, .nav-tabs .nav-item .nav-link:focus {
  color: #566a7f;
}
.nav-tabs .nav-item .nav-link:not(.active) {
  background-color: #eceef1;
}
.nav-tabs .nav-item .nav-link.disabled {
  color: #c7cdd4;
}

.nav-tabs .nav-link,
.nav-pills .nav-link {
  display: inline-flex;
  align-items: center;
  justify-content: center;
}
.nav-tabs .nav-link:not(.active):hover, .nav-tabs .nav-link:not(.active):focus,
.nav-pills .nav-link:not(.active):hover,
.nav-pills .nav-link:not(.active):focus {
  color: #697a8d;
}
.nav-tabs:not(.nav-fill):not(.nav-justified) .nav-link,
.nav-pills:not(.nav-fill):not(.nav-justified) .nav-link {
  width: 100%;
}

.nav-pills .nav-link:not(.active, .disabled) {
  color: #566a7f;
}

.tab-content {
  padding: 1.5rem;
  border-radius: 0.375rem;
}

.nav-scrollable {
  display: -webkit-inline-box;
  display: -moz-inline-box;
  width: 100%;
  overflow-y: auto;
  flex-wrap: nowrap;
}

.nav-tabs .nav-link {
  background-clip: padding-box;
}
.nav-tabs .nav-link.active {
  border-bottom-color: #fff;
}
.nav-tabs .nav-link.active:hover, .nav-tabs .nav-link.active:focus {
  border-bottom-color: #fff;
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-bottom-color: transparent;
}

.nav-sm > .nav .nav-link, .nav-sm.nav .nav-link {
  padding: 0.3125rem 0.875rem;
  font-size: 0.75rem;
  line-height: 1.5;
}

.nav-lg > .nav .nav-link, .nav-lg.nav .nav-link {
  padding: 0.875rem 1.3125rem;
  font-size: 1rem;
  line-height: 1.5;
}

.nav-align-top,
.nav-align-right,
.nav-align-bottom,
.nav-align-left {
  display: flex;
}
.nav-align-top > .nav,
.nav-align-top > div > .nav,
.nav-align-right > .nav,
.nav-align-right > div > .nav,
.nav-align-bottom > .nav,
.nav-align-bottom > div > .nav,
.nav-align-left > .nav,
.nav-align-left > div > .nav {
  border: 0;
  z-index: 1;
  position: relative;
}
.nav-align-top > .nav .nav-link:hover, .nav-align-top > .nav .nav-link:focus,
.nav-align-top > div > .nav .nav-link:hover,
.nav-align-top > div > .nav .nav-link:focus,
.nav-align-right > .nav .nav-link:hover,
.nav-align-right > .nav .nav-link:focus,
.nav-align-right > div > .nav .nav-link:hover,
.nav-align-right > div > .nav .nav-link:focus,
.nav-align-bottom > .nav .nav-link:hover,
.nav-align-bottom > .nav .nav-link:focus,
.nav-align-bottom > div > .nav .nav-link:hover,
.nav-align-bottom > div > .nav .nav-link:focus,
.nav-align-left > .nav .nav-link:hover,
.nav-align-left > .nav .nav-link:focus,
.nav-align-left > div > .nav .nav-link:hover,
.nav-align-left > div > .nav .nav-link:focus {
  isolation: auto;
}
.nav-align-top .row-bordered > [class^=col-]::before, .nav-align-top .row-bordered > [class^=col-]::after,
.nav-align-top .row-bordered > [class*=" col-"]::before,
.nav-align-top .row-bordered > [class*=" col-"]::after,
.nav-align-top .row-bordered > [class^="col "]::before,
.nav-align-top .row-bordered > [class^="col "]::after,
.nav-align-top .row-bordered > [class*=" col "]::before,
.nav-align-top .row-bordered > [class*=" col "]::after,
.nav-align-top .row-bordered > [class$=" col"]::before,
.nav-align-top .row-bordered > [class$=" col"]::after,
.nav-align-top .row-bordered > [class=col]::before,
.nav-align-top .row-bordered > [class=col]::after,
.nav-align-right .row-bordered > [class^=col-]::before,
.nav-align-right .row-bordered > [class^=col-]::after,
.nav-align-right .row-bordered > [class*=" col-"]::before,
.nav-align-right .row-bordered > [class*=" col-"]::after,
.nav-align-right .row-bordered > [class^="col "]::before,
.nav-align-right .row-bordered > [class^="col "]::after,
.nav-align-right .row-bordered > [class*=" col "]::before,
.nav-align-right .row-bordered > [class*=" col "]::after,
.nav-align-right .row-bordered > [class$=" col"]::before,
.nav-align-right .row-bordered > [class$=" col"]::after,
.nav-align-right .row-bordered > [class=col]::before,
.nav-align-right .row-bordered > [class=col]::after,
.nav-align-bottom .row-bordered > [class^=col-]::before,
.nav-align-bottom .row-bordered > [class^=col-]::after,
.nav-align-bottom .row-bordered > [class*=" col-"]::before,
.nav-align-bottom .row-bordered > [class*=" col-"]::after,
.nav-align-bottom .row-bordered > [class^="col "]::before,
.nav-align-bottom .row-bordered > [class^="col "]::after,
.nav-align-bottom .row-bordered > [class*=" col "]::before,
.nav-align-bottom .row-bordered > [class*=" col "]::after,
.nav-align-bottom .row-bordered > [class$=" col"]::before,
.nav-align-bottom .row-bordered > [class$=" col"]::after,
.nav-align-bottom .row-bordered > [class=col]::before,
.nav-align-bottom .row-bordered > [class=col]::after,
.nav-align-left .row-bordered > [class^=col-]::before,
.nav-align-left .row-bordered > [class^=col-]::after,
.nav-align-left .row-bordered > [class*=" col-"]::before,
.nav-align-left .row-bordered > [class*=" col-"]::after,
.nav-align-left .row-bordered > [class^="col "]::before,
.nav-align-left .row-bordered > [class^="col "]::after,
.nav-align-left .row-bordered > [class*=" col "]::before,
.nav-align-left .row-bordered > [class*=" col "]::after,
.nav-align-left .row-bordered > [class$=" col"]::before,
.nav-align-left .row-bordered > [class$=" col"]::after,
.nav-align-left .row-bordered > [class=col]::before,
.nav-align-left .row-bordered > [class=col]::after {
  border-color: #d9dee3;
}

.nav-align-right,
.nav-align-left {
  align-items: stretch;
}
.nav-align-right > .nav,
.nav-align-right > div > .nav,
.nav-align-left > .nav,
.nav-align-left > div > .nav {
  flex-grow: 0;
  flex-direction: column;
}
.nav-align-right > .tab-content,
.nav-align-left > .tab-content {
  flex-grow: 1;
}

.nav-align-top {
  flex-direction: column;
}
.nav-align-top .nav-tabs ~ .tab-content {
  z-index: 1;
  box-shadow: 0px 6px 7px -1px rgba(67, 89, 113, 0.12);
}
.nav-align-top .nav-tabs .nav-item:first-child .nav-link {
  border-top-left-radius: 0.375rem;
}
.nav-align-top .nav-tabs .nav-item:last-child .nav-link {
  border-top-right-radius: 0.375rem;
}
.nav-align-top .nav-tabs .nav-item:not(:first-child) .nav-link {
  border-left: 1px solid #fff;
}
.nav-align-top .nav-tabs .nav-link.active {
  box-shadow: 0 2px 6px 0 rgba(67, 89, 113, 0.12);
}

.nav-align-right {
  flex-direction: row-reverse;
}
.nav-align-right > .nav .nav-item,
.nav-align-right > div > .nav .nav-item {
  margin-left: -1px;
  margin-bottom: 0;
}
.nav-align-right .nav-link {
  text-align: right;
  justify-content: end;
}
.nav-align-right .nav-tabs ~ .tab-content {
  box-shadow: 0 2px 6px 0 rgba(67, 89, 113, 0.12);
}
.nav-align-right .nav-tabs .nav-item:not(:first-child) .nav-link {
  border-top: 1px solid #fff;
}
.nav-align-right .nav-tabs .nav-item:first-child .nav-link {
  border-top-right-radius: 0.375rem;
}
.nav-align-right .nav-tabs .nav-item:last-child .nav-link {
  border-bottom-right-radius: 0.375rem;
}
.nav-align-right .nav-tabs .nav-link.active {
  box-shadow: 5px 4px 6px 0 rgba(67, 89, 113, 0.12);
}

.nav-align-bottom {
  flex-direction: column-reverse;
}
.nav-align-bottom > .nav .nav-item,
.nav-align-bottom > div > .nav .nav-item {
  margin-bottom: 0;
  margin-top: -1px;
}
.nav-align-bottom .nav-tabs ~ .tab-content {
  box-shadow: 0 2px 6px 0 rgba(67, 89, 113, 0.12);
}
.nav-align-bottom .nav-tabs .nav-item:first-child .nav-link {
  border-bottom-left-radius: 0.375rem;
}
.nav-align-bottom .nav-tabs .nav-item:last-child .nav-link {
  border-bottom-right-radius: 0.375rem;
}
.nav-align-bottom .nav-tabs .nav-item:not(:first-child) .nav-link {
  border-left: 1px solid #fff;
}
.nav-align-bottom .nav-tabs .nav-link.active {
  box-shadow: 0 4px 6px 0 rgba(67, 89, 113, 0.12);
}

.nav-align-left > .nav .nav-item,
.nav-align-left > div > .nav .nav-item {
  margin-right: -1px;
  margin-bottom: 0;
}
.nav-align-left .nav-link {
  text-align: left;
  justify-content: start;
}
.nav-align-left .nav-tabs ~ .tab-content {
  box-shadow: 0 2px 6px 0 rgba(67, 89, 113, 0.12);
}
.nav-align-left .nav-tabs .nav-item:not(:first-child) .nav-link {
  border-top: 1px solid #fff;
}
.nav-align-left .nav-tabs .nav-item:first-child .nav-link {
  border-top-left-radius: 0.375rem;
}
.nav-align-left .nav-tabs .nav-item:last-child .nav-link {
  border-bottom-left-radius: 0.375rem;
}
.nav-align-left .nav-tabs .nav-link.active {
  box-shadow: -5px 2px 6px 0 rgba(67, 89, 113, 0.12);
}

.nav-align-top > .tab-content,
.nav-align-right > .tab-content,
.nav-align-bottom > .tab-content,
.nav-align-left > .tab-content {
  flex-shrink: 1;
  border: 0 solid #d9dee3;
  box-shadow: 0 2px 6px 0 rgba(67, 89, 113, 0.12);
  background-clip: padding-box;
  background: #fff;
}

.nav-align-top :not(.nav-pills) ~ .tab-content {
  border-radius: 0 0 0.375rem 0.375rem;
}

.nav-align-top .nav-tabs:not(.nav-fill) ~ .tab-content {
  border-top-right-radius: 0.375rem;
}

.nav-align-right :not(.nav-pills) ~ .tab-content {
  border-radius: 0.375rem 0 0 0.375rem;
}

.nav-align-bottom :not(.nav-pills) ~ .tab-content {
  border-radius: 0.375rem 0.375rem 0 0;
}

.nav-align-left :not(.nav-pills) ~ .tab-content {
  border-radius: 0 0.375rem 0.375rem 0;
}

.nav-align-left > .tab-content {
  border-radius: 0 0.375rem 0.375rem 0.375rem;
}

.page-item.first .page-link, .page-item.last .page-link, .page-item.next .page-link, .page-item.prev .page-link, .page-item.previous .page-link {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.page-item.disabled .page-link {
  border-color: #d9dee3;
}
.page-item.active .page-link {
  margin: 0 0.1rem 0 0.3rem;
}

.page-link,
.page-link > a {
  border-radius: 0.375rem;
  line-height: 1;
  text-align: center;
  min-width: calc(
    2.1875rem + 0px
  );
}
.page-link:focus,
.page-link > a:focus {
  color: #697a8d;
}

.page-link.btn-primary {
  box-shadow: none !important;
}

.pagination-lg .page-link,
.pagination-lg > li > a:not(.page-link) {
  min-width: calc(
    2.875rem + 0px
  );
}

.pagination-lg > .page-item.first .page-link, .pagination-lg > .page-item.last .page-link, .pagination-lg > .page-item.next .page-link, .pagination-lg > .page-item.prev .page-link, .pagination-lg > .page-item.previous .page-link {
  padding-top: 0.853rem;
  padding-bottom: 0.853rem;
}

.pagination-sm .page-link,
.pagination-sm > li > a:not(.page-link) {
  min-width: calc(
    1.5rem + 0px
  );
}
.pagination-sm .page-link .tf-icon,
.pagination-sm > li > a:not(.page-link) .tf-icon {
  font-size: 0.9375rem;
}

.pagination-sm > .page-item.first .page-link, .pagination-sm > .page-item.last .page-link, .pagination-sm > .page-item.next .page-link, .pagination-sm > .page-item.prev .page-link, .pagination-sm > .page-item.previous .page-link {
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;
}

.alert-secondary {
  background-color: #ebeef0;
  border-color: #dadee3;
  color: #8592a3;
}
.alert-secondary .btn-close {
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%238592a3' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.5' fill='%238592a3' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.alert-secondary .alert-link {
  color: #8592a3;
}

.alert-secondary hr {
  background-color: #8592a3 !important;
}

.alert-success {
  background-color: #e8fadf;
  border-color: #d4f5c3;
  color: #71dd37;
}
.alert-success .btn-close {
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%2371dd37' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.5' fill='%2371dd37' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.alert-success .alert-link {
  color: #71dd37;
}

.alert-success hr {
  background-color: #71dd37 !important;
}

.alert-info {
  background-color: #d7f5fc;
  border-color: #b3edf9;
  color: #03c3ec;
}
.alert-info .btn-close {
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%2303c3ec' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.5' fill='%2303c3ec' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.alert-info .alert-link {
  color: #03c3ec;
}

.alert-info hr {
  background-color: #03c3ec !important;
}

.alert-warning {
  background-color: #fff2d6;
  border-color: #ffe6b3;
  color: #ffab00;
}
.alert-warning .btn-close {
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%23ffab00' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.5' fill='%23ffab00' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.alert-warning .alert-link {
  color: #ffab00;
}

.alert-warning hr {
  background-color: #ffab00 !important;
}

.alert-danger {
  background-color: #ffe0db;
  border-color: #ffc5bb;
  color: #ff3e1d;
}
.alert-danger .btn-close {
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%23ff3e1d' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.5' fill='%23ff3e1d' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.alert-danger .alert-link {
  color: #ff3e1d;
}

.alert-danger hr {
  background-color: #ff3e1d !important;
}

.alert-dark {
  background-color: #dcdfe1;
  border-color: #bdc2c8;
  color: #233446;
}
.alert-dark .btn-close {
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%23233446' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.5' fill='%23233446' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.alert-dark .alert-link {
  color: #233446;
}

.alert-dark hr {
  background-color: #233446 !important;
}

.alert-gray {
  background-color: rgba(253, 253, 254, 0.856);
  border-color: rgba(251, 251, 252, 0.73);
  color: rgba(67, 89, 113, 0.1);
}
.alert-gray .btn-close {
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='rgba(67, 89, 113, 0.1)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.5' fill='rgba(67, 89, 113, 0.1)' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.alert-gray .alert-link {
  color: rgba(67, 89, 113, 0.1);
}

.alert-gray hr {
  background-color: rgba(67, 89, 113, 0.1) !important;
}

.modal-open .tooltip {
  z-index: 1092;
}

.tooltip-inner {
  box-shadow: 0 0.125rem 0.25rem rgba(161, 172, 184, 0.4);
}

.modal-open .popover {
  z-index: 1091;
}

.popover {
  box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
}
.popover .popover-arrow {
  z-index: 1;
}
.popover.bs-popover-auto[data-popper-placement=bottom] > .popover-arrow::after {
  border-bottom-color: white;
  top: 2px;
}
.popover.bs-popover-auto[data-popper-placement=bottom] > .popover-arrow:before {
  top: 1px;
}

.popover-header {
  padding: 1.125rem 1.125rem 0;
  font-size: 1.125rem;
}

.form-label,
.col-form-label {
  font-size: 0.9375rem;
  text-transform: uppercase;
  letter-spacing: inherit;
}

.form-label-lg {
  font-size: 1rem;
}

.form-label-sm {
  font-size: 0.75rem;
}

.form-control::placeholder, .form-control:focus::placeholder {
  transition: all 0.25s ease;
}
.form-control:hover:not([disabled]):not([focus]) {
  border-color: #c7cdd4;
}

.form-select {
  background-clip: padding-box;
}
.form-select:hover:not([disabled]):not([focus]) {
  border-color: #c7cdd4;
}

.form-range::-webkit-slider-thumb {
  box-shadow: 0 0 6px 0 rgba(67, 89, 113, 0.4);
  transition: transform 0.2s;
  transform-origin: center;
}
.form-range::-webkit-slider-thumb:focus {
  box-shadow: 0 0 8px 0px rgba(67, 89, 113, 0.4);
}
.form-range::-webkit-slider-thumb:active {
  transform: scale(1.4, 1.4);
}
.form-range::-moz-range-thumb {
  box-shadow: 0 0 6px 0 rgba(67, 89, 113, 0.4);
  transition: transform 0.2s;
  transform-origin: center;
}
.form-range::-moz-range-thumb:focus {
  box-shadow: 0 0 8px 0px rgba(67, 89, 113, 0.4);
}
.form-range::-moz-range-thumb:active {
  transform: scale(1.4, 1.4);
}
.form-range:disabled::-webkit-slider-runnable-track {
  background-color: rgba(67, 89, 113, 0.05);
}
.form-range:disabled::-moz-range-track {
  background-color: rgba(67, 89, 113, 0.05);
  box-shadow: none;
}
.form-range:disabled::-webkit-slider-thumb {
  box-shadow: none;
}
.form-range:disabled::-moz-range-thumb {
  box-shadow: none;
}

input[type='number'] {
  -moz-appearance:textfield;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.input-group:hover .input-group-text,
.input-group:hover .form-control {
  border-color: #c7cdd4;
}
.input-group:focus-within {
  box-shadow: 0 0 0.25rem 0.05rem rgba(105, 108, 255, 0.1);
}
.input-group:focus-within .form-control,
.input-group:focus-within .input-group-text {
  box-shadow: none;
}
.input-group.disabled .input-group-text {
  background-color: #eceef1;
}

.input-group-text {
  background-clip: padding-box;
}
.input-group-text i {
  font-size: 0.9375rem;
}

.input-group-lg > .input-group-text i {
  font-size: 1rem;
}

.input-group-sm > .input-group-text i {
  font-size: 0.75rem;
}

.input-group-merge .input-group-text:first-child {
  border-right: 0;
}
.input-group-merge .input-group-text:last-child {
  border-left: 0;
}
.input-group-merge .form-control:not(:first-child) {
  padding-left: 0;
  border-left: 0;
}
.input-group-merge .form-control:not(:last-child) {
  padding-right: 0;
  border-right: 0;
}

.input-group-text {
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .input-group-text {
    transition: none;
  }
}

.form-floating > .form-control:focus::placeholder,
.form-floating > .form-control:not(:placeholder-shown)::placeholder {
  color: #b4bdc6;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.3rem;
  font-size: 85%;
  color: #71dd37;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.7rem;
  margin-top: 0.1rem;
  font-size: 0.9375rem;
  color: #fff;
  background-color: #71dd37;
  border-radius: 0.25rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #71dd37 !important;
}
.dark-style .was-validated .form-control:valid, .dark-style .form-control.is-valid {
  border-color: #71dd37 !important;
}
.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: #71dd37 !important;
  box-shadow: 0 0 0.25rem 0.05rem rgba(113, 221, 55, 0.1);
}

.was-validated .form-select:valid, .form-select.is-valid {
  border-color: #71dd37 !important;
}
.was-validated .form-select:valid:focus, .form-select.is-valid:focus {
  border-color: #71dd37;
  box-shadow: 0 0 0.25rem 0.05rem rgba(113, 221, 55, 0.1);
}

.was-validated .form-check-input:valid, .form-check-input.is-valid {
  border-color: #71dd37;
}
.was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
  background-color: #71dd37;
  border-color: #71dd37;
}
.was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
  box-shadow: 0 0 0.25rem 0.05rem rgba(113, 221, 55, 0.1);
  border-color: #71dd37;
}
.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #71dd37;
}

.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group .form-control:valid ~ .input-group-text, .input-group .form-control.is-valid ~ .input-group-text {
  border-color: #71dd37 !important;
}
.was-validated .input-group .form-control:valid:focus, .input-group .form-control.is-valid:focus {
  border-color: #71dd37 !important;
  box-shadow: none;
}
.was-validated .input-group .form-control:valid:focus ~ .input-group-text, .input-group .form-control.is-valid:focus ~ .input-group-text {
  border-color: #71dd37;
}

.was-validated .input-group .form-control:valid, .input-group .form-control.is-valid,
.was-validated .input-group .form-select:valid,
.input-group .form-select.is-valid {
  z-index: 3;
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.3rem;
  font-size: 85%;
  color: #ff3e1d;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.7rem;
  margin-top: 0.1rem;
  font-size: 0.9375rem;
  color: #fff;
  background-color: #ff3e1d;
  border-radius: 0.25rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #ff3e1d !important;
}
.dark-style .was-validated .form-control:invalid, .dark-style .form-control.is-invalid {
  border-color: #ff3e1d !important;
}
.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: #ff3e1d !important;
  box-shadow: 0 0 0.25rem 0.05rem rgba(255, 62, 29, 0.1);
}

.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: #ff3e1d !important;
}
.was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
  border-color: #ff3e1d;
  box-shadow: 0 0 0.25rem 0.05rem rgba(255, 62, 29, 0.1);
}

.was-validated .form-check-input:invalid, .form-check-input.is-invalid {
  border-color: #ff3e1d;
}
.was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
  background-color: #ff3e1d;
  border-color: #ff3e1d;
}
.was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
  box-shadow: 0 0 0.25rem 0.05rem rgba(255, 62, 29, 0.1);
  border-color: #ff3e1d;
}
.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #ff3e1d;
}

.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group .form-control:invalid ~ .input-group-text, .input-group .form-control.is-invalid ~ .input-group-text {
  border-color: #ff3e1d !important;
}
.was-validated .input-group .form-control:invalid:focus, .input-group .form-control.is-invalid:focus {
  border-color: #ff3e1d !important;
  box-shadow: none;
}
.was-validated .input-group .form-control:invalid:focus ~ .input-group-text, .input-group .form-control.is-invalid:focus ~ .input-group-text {
  border-color: #ff3e1d;
}

.was-validated .input-group .form-control:invalid, .input-group .form-control.is-invalid,
.was-validated .input-group .form-select:invalid,
.input-group .form-select.is-invalid {
  z-index: 3;
}

form .error:not(li):not(input) {
  color: #ff3e1d;
  font-size: 85%;
  margin-top: 0.25rem;
}
form .invalid,
form .is-invalid .invalid:before,
form .is-invalid::before {
  border-color: #ff3e1d !important;
}
form .form-label.invalid, form .form-label.is-invalid {
  border-color: #ff3e1d;
  box-shadow: 0 0 0 2px rgba(255, 62, 29, 0.4) !important;
}
form select.invalid ~ .select2 .select2-selection {
  border-color: #ff3e1d;
}
form select.is-invalid ~ .select2 .select2-selection {
  border-color: #ff3e1d !important;
}
form select.selectpicker.is-invalid ~ .btn {
  border-color: #ff3e1d !important;
}

.modal-content {
  box-shadow: 0 2px 16px 0 rgba(67, 89, 113, 0.45);
}

.modal .btn-close {
  background-color: #fff;
  border-radius: 0.5rem;
  opacity: 1;
  padding: 0.635rem;
  box-shadow: 0 0.125rem 0.25rem rgba(161, 172, 184, 0.4);
  transition: all 0.23s ease 0.1s;
  transform: translate(23px, -25px);
}
.modal .btn-close:hover, .modal .btn-close:focus, .modal .btn-close:active {
  opacity: 1;
  outline: none;
  transform: translate(20px, -20px);
}
.modal .modal-header .btn-close {
  margin-top: -1.25rem;
}

.modal-footer {
  padding: 0.25rem 1.5rem 1.5rem;
}

.modal-dialog-scrollable .btn-close,
.modal-fullscreen .btn-close,
.modal-top .btn-close {
  box-shadow: none;
  transform: translate(0, 0) !important;
}
.modal-dialog-scrollable .btn-close:hover,
.modal-fullscreen .btn-close:hover,
.modal-top .btn-close:hover {
  transform: translate(0, 0) !important;
}

.modal-top .modal-dialog {
  margin-top: 0;
}
.modal-top .modal-content {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

@media (max-width: 991.98px) {
  .modal-onboarding .onboarding-horizontal {
    flex-direction: column;
  }
}
@media (max-width: 767.98px) {
  .modal .modal-dialog:not(.modal-fullscreen) {
    padding: 0 0.75rem;
    padding-left: 0.75rem !important;
  }
  .modal .carousel-control-prev,
  .modal .carousel-control-next {
    display: none;
  }
}
@media (min-width: 576px) {
  .modal-content {
    box-shadow: 0 2px 20px 0 rgba(67, 89, 113, 0.45);
  }
  .modal-sm .modal-dialog {
    max-width: 22.5rem;
  }
}
@media (min-width: 1200px) {
  .modal-xl .modal-dialog {
    max-width: 1140px;
  }
}
.progress {
  overflow: initial;
}

.progress-bar.bg-secondary {
  box-shadow: 0 2px 4px 0 rgba(133, 146, 163, 0.4);
}

.progress-bar.bg-success {
  box-shadow: 0 2px 4px 0 rgba(113, 221, 55, 0.4);
}

.progress-bar.bg-info {
  box-shadow: 0 2px 4px 0 rgba(3, 195, 236, 0.4);
}

.progress-bar.bg-warning {
  box-shadow: 0 2px 4px 0 rgba(255, 171, 0, 0.4);
}

.progress-bar.bg-danger {
  box-shadow: 0 2px 4px 0 rgba(255, 62, 29, 0.4);
}

.progress-bar.bg-light {
  box-shadow: 0 2px 4px 0 rgba(252, 253, 253, 0.4);
}

.progress-bar.bg-dark {
  box-shadow: 0 2px 4px 0 rgba(35, 52, 70, 0.4);
}

.progress-bar.bg-gray {
  box-shadow: 0 2px 4px 0 rgba(67, 89, 113, 0.4);
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.07) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.07) 50%, rgba(255, 255, 255, 0.07) 75%, transparent 75%, transparent);
}

.progress .progress-bar:last-child {
  border-top-right-radius: 10rem;
  border-bottom-right-radius: 10rem;
}
.progress .progress-bar:first-child {
  border-top-left-radius: 10rem;
  border-bottom-left-radius: 10rem;
}

.breadcrumb-item,
.breadcrumb-item a {
  color: #697a8d;
}
.breadcrumb-item:hover, .breadcrumb-item:focus,
.breadcrumb-item a:hover,
.breadcrumb-item a:focus {
  color: #697a8d;
}
.breadcrumb-item.active,
.breadcrumb-item a.active {
  font-weight: 500;
}
.breadcrumb-item.active::before,
.breadcrumb-item a.active::before {
  font-weight: 400;
}

.breadcrumb-item.active a, .breadcrumb-item.active a:hover, .breadcrumb-item.active a:focus, .breadcrumb-item.active a:active {
  color: inherit;
}

.breadcrumb-style1 .breadcrumb-item + .breadcrumb-item::before,
.breadcrumb-style2 .breadcrumb-item + .breadcrumb-item::before {
  font-family: boxicons;
  vertical-align: middle;
}

.breadcrumb-style1 .breadcrumb-item + .breadcrumb-item::before {
  content: "\ea50";
  font-size: 1.125rem;
  line-height: 1.4;
}

.breadcrumb-style2 .breadcrumb-item + .breadcrumb-item::before {
  content: "\ebe7";
  font-size: 1rem;
  line-height: 1.35rem;
}

.list-group-item-secondary {
  background-color: #e7e9ed;
  color: #8592a3 !important;
}

a.list-group-item-secondary,
button.list-group-item-secondary {
  color: #8592a3;
}
a.list-group-item-secondary:hover, a.list-group-item-secondary:focus,
button.list-group-item-secondary:hover,
button.list-group-item-secondary:focus {
  background-color: #dbdde1;
  color: #8592a3;
}
a.list-group-item-secondary.active,
button.list-group-item-secondary.active {
  border-color: #8592a3;
  background-color: #8592a3;
  color: #8592a3;
}

.list-group-item-success {
  background-color: #e3f8d7;
  color: #71dd37 !important;
}

a.list-group-item-success,
button.list-group-item-success {
  color: #71dd37;
}
a.list-group-item-success:hover, a.list-group-item-success:focus,
button.list-group-item-success:hover,
button.list-group-item-success:focus {
  background-color: #d8eccc;
  color: #71dd37;
}
a.list-group-item-success.active,
button.list-group-item-success.active {
  border-color: #71dd37;
  background-color: #71dd37;
  color: #71dd37;
}

.list-group-item-info {
  background-color: #cdf3fb;
  color: #03c3ec !important;
}

a.list-group-item-info,
button.list-group-item-info {
  color: #03c3ec;
}
a.list-group-item-info:hover, a.list-group-item-info:focus,
button.list-group-item-info:hover,
button.list-group-item-info:focus {
  background-color: #c3e7ee;
  color: #03c3ec;
}
a.list-group-item-info.active,
button.list-group-item-info.active {
  border-color: #03c3ec;
  background-color: #03c3ec;
  color: #03c3ec;
}

.list-group-item-warning {
  background-color: #ffeecc;
  color: #ffab00 !important;
}

a.list-group-item-warning,
button.list-group-item-warning {
  color: #ffab00;
}
a.list-group-item-warning:hover, a.list-group-item-warning:focus,
button.list-group-item-warning:hover,
button.list-group-item-warning:focus {
  background-color: #f2e2c2;
  color: #ffab00;
}
a.list-group-item-warning.active,
button.list-group-item-warning.active {
  border-color: #ffab00;
  background-color: #ffab00;
  color: #ffab00;
}

.list-group-item-danger {
  background-color: #ffd8d2;
  color: #ff3e1d !important;
}

a.list-group-item-danger,
button.list-group-item-danger {
  color: #ff3e1d;
}
a.list-group-item-danger:hover, a.list-group-item-danger:focus,
button.list-group-item-danger:hover,
button.list-group-item-danger:focus {
  background-color: #f2cdc8;
  color: #ff3e1d;
}
a.list-group-item-danger.active,
button.list-group-item-danger.active {
  border-color: #ff3e1d;
  background-color: #ff3e1d;
  color: #ff3e1d;
}

.list-group-item-dark {
  background-color: #d3d6da;
  color: #233446 !important;
}

a.list-group-item-dark,
button.list-group-item-dark {
  color: #233446;
}
a.list-group-item-dark:hover, a.list-group-item-dark:focus,
button.list-group-item-dark:hover,
button.list-group-item-dark:focus {
  background-color: #c8cbcf;
  color: #233446;
}
a.list-group-item-dark.active,
button.list-group-item-dark.active {
  border-color: #233446;
  background-color: #233446;
  color: #233446;
}

.list-group-item-gray {
  background-color: rgba(253, 253, 253, 0.82);
  color: rgba(67, 89, 113, 0.1) !important;
}

a.list-group-item-gray,
button.list-group-item-gray {
  color: rgba(67, 89, 113, 0.1);
}
a.list-group-item-gray:hover, a.list-group-item-gray:focus,
button.list-group-item-gray:hover,
button.list-group-item-gray:focus {
  background-color: rgba(235, 235, 235, 0.829);
  color: rgba(67, 89, 113, 0.1);
}
a.list-group-item-gray.active,
button.list-group-item-gray.active {
  border-color: rgba(67, 89, 113, 0.1);
  background-color: rgba(67, 89, 113, 0.1);
  color: rgba(67, 89, 113, 0.1);
}

.list-group.list-group-timeline {
  position: relative;
}
.list-group.list-group-timeline:before {
  background-color: #d9dee3;
  position: absolute;
  content: "";
  width: 1px;
  height: 100%;
  top: 0;
  bottom: 0;
  left: 0.2rem;
}
.list-group.list-group-timeline .list-group-item {
  border: none;
  padding-left: 1.25rem;
}
.list-group.list-group-timeline .list-group-item:before {
  position: absolute;
  display: block;
  content: "";
  width: 7px;
  height: 7px;
  left: 0;
  top: 50%;
  margin-top: -3.5px;
  border-radius: 100%;
}
.list-group .list-group-item.active h1,
.list-group .list-group-item.active .h1,
.list-group .list-group-item.active h2,
.list-group .list-group-item.active .h2,
.list-group .list-group-item.active h3,
.list-group .list-group-item.active .h3,
.list-group .list-group-item.active h4,
.list-group .list-group-item.active .h4,
.list-group .list-group-item.active h5,
.list-group .list-group-item.active .h5,
.list-group .list-group-item.active h6,
.list-group .list-group-item.active .h6 {
  color: #fff;
}

.navbar {
  z-index: 2;
}
.navbar .dropdown:focus,
.navbar .dropdown-toggle:focus {
  outline: 0;
}
.navbar .navbar-toggler {
  border: none;
}
.navbar .navbar-toggler:focus {
  box-shadow: none;
}

.fixed-top {
  z-index: 1030;
}

.navbar.navbar-light {
  color: rgba(67, 89, 113, 0.5);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(67, 89, 113, 0.3) !important;
}

.navbar.navbar-dark {
  color: rgba(255, 255, 255, 0.8);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.4) !important;
}

.navbar-collapse,
.navbar-brand,
.navbar-text {
  flex-shrink: 1;
}

.navbar-dark hr {
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-light hr {
  border-color: rgba(67, 89, 113, 0.1);
}

.card {
  background-clip: padding-box;
  box-shadow: 0 2px 6px 0 rgba(67, 89, 113, 0.12);
}
.card .card-link {
  display: inline-block;
}
.card .card-header + .card-body,
.card .card-header + .card-content > .card-body:first-of-type {
  padding-top: 0;
}

.card-action.card-fullscreen {
  display: block;
  z-index: 9999;
  position: fixed;
  width: 100% !important;
  height: 100% !important;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  overflow: auto;
  border: none;
  border-radius: 0;
}
.card-action .card-alert {
  position: absolute;
  width: 100%;
  z-index: 999;
}
.card-action .card-alert .alert {
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0px;
}
.card-action .card-header.collapsed {
  border-bottom: 0;
}
.card-action .card-header {
  display: flex;
  line-height: 1.54;
}
.card-action .card-header .card-action-title {
  flex-grow: 1;
  margin-right: 0.5rem;
}
.card-action .card-header .card-action-element {
  flex-shrink: 0;
  background-color: inherit;
  top: 1rem;
  right: 1.5rem;
  color: #697a8d;
}
.card-action .card-header .card-action-element a {
  color: #697a8d;
}
.card-action .card-header .card-action-element a .collapse-icon::after {
  margin-top: -0.15rem;
}
.card-action .blockUI .sk-fold {
  margin: 0 auto;
}
.card-action .blockUI h5, .card-action .blockUI .h5 {
  color: #697a8d;
  margin: 1rem 0 0 0;
}

.card-header,
.card-footer {
  border-color: #d9dee3;
}

.card hr {
  color: #d9dee3;
}

.card .row-bordered > [class*=" col "] .card .row-bordered > [class$=" col"], .card .row-bordered > [class*=" col "]::before, .card .row-bordered > [class*=" col "]::after,
.card .row-bordered > [class^="col "] .card .row-bordered > [class$=" col"],
.card .row-bordered > [class^="col "]::before,
.card .row-bordered > [class^="col "]::after,
.card .row-bordered > [class*=" col-"] .card .row-bordered > [class$=" col"],
.card .row-bordered > [class*=" col-"]::before,
.card .row-bordered > [class*=" col-"]::after,
.card .row-bordered > [class^=col-] .card .row-bordered > [class$=" col"],
.card .row-bordered > [class^=col-]::before,
.card .row-bordered > [class^=col-]::after,
.card .row-bordered > [class=col] .card .row-bordered > [class$=" col"],
.card .row-bordered > [class=col]::before,
.card .row-bordered > [class=col]::after {
  border-color: #d9dee3;
}

.card-header.header-elements,
.card-title.header-elements {
  display: flex;
  width: 100%;
  align-items: center;
  flex-wrap: wrap;
}

.card-header.card-header-elements {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}
.card-header .card-header-elements {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.card-header-elements,
.card-title-elements {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}
.card-header-elements + .card-header-elements,
.card-header-elements > * + *,
.card-header-elements + .card-title-elements,
.card-title-elements > * + *,
.card-title-elements + .card-header-elements,
.card-title-elements + .card-title-elements {
  margin-left: 0.25rem;
}

.card-img-left {
  border-top-left-radius: 0.5rem;
  border-bottom-left-radius: 0.5rem;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
@media (max-width: 767.98px) {
  .card-img-left {
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
}

.card-img-right {
  border-top-right-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
@media (max-width: 767.98px) {
  .card-img-right {
    border-bottom-right-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}

.card > .list-group .list-group-item {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.card .card-separator {
  border-right: 1px solid #d9dee3;
}

@media (max-width: 767.98px) {
  .card .card-separator {
    border-bottom: 1px solid #d9dee3;
    padding-bottom: 1.5rem;
    border-right-width: 0 !important;
  }
}
.accordion-header + .accordion-collapse .accordion-body {
  padding-top: 0;
}

.accordion.accordion-without-arrow .accordion-button::after {
  background-image: none !important;
}
.accordion .accordion-item.active {
  box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
}

.card.accordion-item {
  box-shadow: 0 0.125rem 0.25rem rgba(161, 172, 184, 0.4);
}

.accordion-button.collapsed:focus {
  box-shadow: none;
}

.accordion-button {
  box-shadow: none;
}

.accordion-header {
  line-height: 1.54;
}

.accordion-item:not(:first-of-type) {
  border-top: 0 solid #d9dee3;
}

.accordion-button {
  font-weight: inherit;
  border-top-left-radius: 0.375rem;
  border-top-right-radius: 0.375rem;
}
.accordion-button.collapsed {
  border-radius: 0.375rem;
}

.accordion > .card:not(:last-of-type) {
  border-radius: 0.375rem !important;
  margin-bottom: 0.6875rem;
}

.close:focus {
  outline: 0;
}

.bg-secondary.toast, .bg-secondary.bs-toast {
  color: #fff;
  background-color: rgba(133, 146, 163, 0.85) !important;
  box-shadow: 0 0.25rem 1rem rgba(133, 146, 163, 0.4);
}
.bg-secondary.toast .toast-header, .bg-secondary.bs-toast .toast-header {
  color: #fff;
}
.bg-secondary.toast .toast-header .btn-close, .bg-secondary.bs-toast .toast-header .btn-close {
  background-color: #8592a3 !important;
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='1' fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  box-shadow: 0 0.1875rem 0.375rem 0 rgba(133, 146, 163, 0.4) !important;
}

.bg-success.toast, .bg-success.bs-toast {
  color: #fff;
  background-color: rgba(113, 221, 55, 0.85) !important;
  box-shadow: 0 0.25rem 1rem rgba(113, 221, 55, 0.4);
}
.bg-success.toast .toast-header, .bg-success.bs-toast .toast-header {
  color: #fff;
}
.bg-success.toast .toast-header .btn-close, .bg-success.bs-toast .toast-header .btn-close {
  background-color: #71dd37 !important;
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='1' fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  box-shadow: 0 0.1875rem 0.375rem 0 rgba(113, 221, 55, 0.4) !important;
}

.bg-info.toast, .bg-info.bs-toast {
  color: #fff;
  background-color: rgba(3, 195, 236, 0.85) !important;
  box-shadow: 0 0.25rem 1rem rgba(3, 195, 236, 0.4);
}
.bg-info.toast .toast-header, .bg-info.bs-toast .toast-header {
  color: #fff;
}
.bg-info.toast .toast-header .btn-close, .bg-info.bs-toast .toast-header .btn-close {
  background-color: #03c3ec !important;
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='1' fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  box-shadow: 0 0.1875rem 0.375rem 0 rgba(3, 195, 236, 0.4) !important;
}

.bg-warning.toast, .bg-warning.bs-toast {
  color: #fff;
  background-color: rgba(255, 171, 0, 0.85) !important;
  box-shadow: 0 0.25rem 1rem rgba(255, 171, 0, 0.4);
}
.bg-warning.toast .toast-header, .bg-warning.bs-toast .toast-header {
  color: #fff;
}
.bg-warning.toast .toast-header .btn-close, .bg-warning.bs-toast .toast-header .btn-close {
  background-color: #ffab00 !important;
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='1' fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  box-shadow: 0 0.1875rem 0.375rem 0 rgba(255, 171, 0, 0.4) !important;
}

.bg-danger.toast, .bg-danger.bs-toast {
  color: #fff;
  background-color: rgba(255, 62, 29, 0.85) !important;
  box-shadow: 0 0.25rem 1rem rgba(255, 62, 29, 0.4);
}
.bg-danger.toast .toast-header, .bg-danger.bs-toast .toast-header {
  color: #fff;
}
.bg-danger.toast .toast-header .btn-close, .bg-danger.bs-toast .toast-header .btn-close {
  background-color: #ff3e1d !important;
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='1' fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  box-shadow: 0 0.1875rem 0.375rem 0 rgba(255, 62, 29, 0.4) !important;
}

.bg-light.toast, .bg-light.bs-toast {
  color: #fff;
  background-color: rgba(252, 253, 253, 0.85) !important;
  box-shadow: 0 0.25rem 1rem rgba(252, 253, 253, 0.4);
}
.bg-light.toast .toast-header, .bg-light.bs-toast .toast-header {
  color: #fff;
}
.bg-light.toast .toast-header .btn-close, .bg-light.bs-toast .toast-header .btn-close {
  background-color: #fcfdfd !important;
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='1' fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  box-shadow: 0 0.1875rem 0.375rem 0 rgba(252, 253, 253, 0.4) !important;
}

.bg-dark.toast, .bg-dark.bs-toast {
  color: #fff;
  background-color: rgba(35, 52, 70, 0.85) !important;
  box-shadow: 0 0.25rem 1rem rgba(35, 52, 70, 0.4);
}
.bg-dark.toast .toast-header, .bg-dark.bs-toast .toast-header {
  color: #fff;
}
.bg-dark.toast .toast-header .btn-close, .bg-dark.bs-toast .toast-header .btn-close {
  background-color: #233446 !important;
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='1' fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  box-shadow: 0 0.1875rem 0.375rem 0 rgba(35, 52, 70, 0.4) !important;
}

.bg-gray.toast, .bg-gray.bs-toast {
  color: #fff;
  background-color: rgba(67, 89, 113, 0.85) !important;
  box-shadow: 0 0.25rem 1rem rgba(67, 89, 113, 0.4);
}
.bg-gray.toast .toast-header, .bg-gray.bs-toast .toast-header {
  color: #fff;
}
.bg-gray.toast .toast-header .btn-close, .bg-gray.bs-toast .toast-header .btn-close {
  background-color: rgba(67, 89, 113, 0.1) !important;
  background-image: url("data:image/svg+xml,%3Csvg width='150px' height='151px' viewBox='0 0 150 151' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpolygon id='path-1' points='131.251657 0 74.9933705 56.25 18.7483426 0 0 18.75 56.2450278 75 0 131.25 18.7483426 150 74.9933705 93.75 131.251657 150 150 131.25 93.7549722 75 150 18.75'%3E%3C/polygon%3E%3C/defs%3E%3Cg id='🎨-%5BSetup%5D:-Colors-&amp;-Shadows' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='Artboard' transform='translate(-225.000000, -250.000000)'%3E%3Cg id='Icon-Color' transform='translate(225.000000, 250.500000)'%3E%3Cuse fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='1' fill='%23fff' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  box-shadow: 0 0.1875rem 0.375rem 0 rgba(67, 89, 113, 0.4) !important;
}

.bs-toast[class^=bg-],
.bs-toast[class*=" bg-"] {
  border: none;
}

.toast.bs-toast {
  background-color: rgba(255, 255, 255, 0.85);
  z-index: 1095;
}
.toast.bs-toast .toast-header {
  padding-bottom: 0.5rem;
  position: relative;
}
.toast.bs-toast .toast-header .btn-close {
  position: absolute;
  top: -8px;
  border-radius: 0.375rem;
  padding: 0.45rem;
  background-size: 0.625em;
  transition: all 0.23s ease 0.1s;
  background-color: #fff;
  box-shadow: 0 0.125rem 0.25rem rgba(161, 172, 184, 0.4);
  right: 2px;
}
.toast.bs-toast .toast-header .btn-close:hover, .toast.bs-toast .toast-header .btn-close:focus, .toast.bs-toast .toast-header .btn-close:active {
  opacity: 1;
  outline: none;
}
.toast.bs-toast .toast-header ~ .toast-body {
  padding-top: 0;
}

.toast-container {
  --bs-toast-zindex: 9;
}

.toast-ex {
  position: fixed;
  top: 4.1rem;
  right: 2.5rem;
}

.toast-placement-ex {
  position: fixed;
}

.carousel .carousel-item.active h1,
.carousel .carousel-item.active .h1,
.carousel .carousel-item.active h2,
.carousel .carousel-item.active .h2,
.carousel .carousel-item.active h3,
.carousel .carousel-item.active .h3,
.carousel .carousel-item.active h4,
.carousel .carousel-item.active .h4,
.carousel .carousel-item.active h5,
.carousel .carousel-item.active .h5,
.carousel .carousel-item.active h6,
.carousel .carousel-item.active .h6,
.carousel .carousel-item.carousel-item-start h1,
.carousel .carousel-item.carousel-item-start .h1,
.carousel .carousel-item.carousel-item-start h2,
.carousel .carousel-item.carousel-item-start .h2,
.carousel .carousel-item.carousel-item-start h3,
.carousel .carousel-item.carousel-item-start .h3,
.carousel .carousel-item.carousel-item-start h4,
.carousel .carousel-item.carousel-item-start .h4,
.carousel .carousel-item.carousel-item-start h5,
.carousel .carousel-item.carousel-item-start .h5,
.carousel .carousel-item.carousel-item-start h6,
.carousel .carousel-item.carousel-item-start .h6 {
  color: #fff;
}

.carousel.carousel-dark .carousel-item.active h1,
.carousel.carousel-dark .carousel-item.active .h1,
.carousel.carousel-dark .carousel-item.active h2,
.carousel.carousel-dark .carousel-item.active .h2,
.carousel.carousel-dark .carousel-item.active h3,
.carousel.carousel-dark .carousel-item.active .h3,
.carousel.carousel-dark .carousel-item.active h4,
.carousel.carousel-dark .carousel-item.active .h4,
.carousel.carousel-dark .carousel-item.active h5,
.carousel.carousel-dark .carousel-item.active .h5,
.carousel.carousel-dark .carousel-item.active h6,
.carousel.carousel-dark .carousel-item.active .h6,
.carousel.carousel-dark .carousel-item.carousel-item-start h1,
.carousel.carousel-dark .carousel-item.carousel-item-start .h1,
.carousel.carousel-dark .carousel-item.carousel-item-start h2,
.carousel.carousel-dark .carousel-item.carousel-item-start .h2,
.carousel.carousel-dark .carousel-item.carousel-item-start h3,
.carousel.carousel-dark .carousel-item.carousel-item-start .h3,
.carousel.carousel-dark .carousel-item.carousel-item-start h4,
.carousel.carousel-dark .carousel-item.carousel-item-start .h4,
.carousel.carousel-dark .carousel-item.carousel-item-start h5,
.carousel.carousel-dark .carousel-item.carousel-item-start .h5,
.carousel.carousel-dark .carousel-item.carousel-item-start h6,
.carousel.carousel-dark .carousel-item.carousel-item-start .h6 {
  color: #435971;
}

.spinner-border-lg {
  width: 3rem;
  height: 3rem;
  border-width: 0.3em;
}

.spinner-grow-lg {
  width: 3rem;
  height: 3rem;
  border-width: 0.3em;
}

@-webkit-keyframes spinner-border-rtl {
  to {
    transform: rotate(-360deg);
  }
}
@-moz-keyframes spinner-border-rtl {
  to {
    transform: rotate(-360deg);
  }
}
@keyframes spinner-border-rtl {
  to {
    transform: rotate(-360deg);
  }
}
.offcanvas-header {
  padding-bottom: 0.75rem;
}

.offcanvas-body {
  padding-top: 0.75rem;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.overflow-visible {
  overflow: visible !important;
}

.overflow-scroll {
  overflow: scroll !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-grid {
  display: grid !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: flex !important;
}

.d-inline-flex {
  display: inline-flex !important;
}
.apexcharts-legend-marker{
  border-radius: 30% !important;
}
.apexcharts-legend-text{
  font-size: 16px !important;
}
.d-none {
  display: none !important;
}

.shadow {
  box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45) !important;
}

.shadow-inset {
  box-shadow: inset 0 0.25rem 1rem rgba(161, 172, 184, 0.45) !important;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(161, 172, 184, 0.4) !important;
}

.shadow-lg {
  box-shadow: 0 0.625rem 1.25rem rgba(161, 172, 184, 0.5) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.top-0 {
  top: 0 !important;
}

.top-50 {
  top: 50% !important;
}

.top-100 {
  top: 100% !important;
}

.bottom-0 {
  bottom: 0 !important;
}

.bottom-50 {
  bottom: 50% !important;
}

.bottom-100 {
  bottom: 100% !important;
}

.zindex-1 {
  z-index: 1 !important;
}

.zindex-2 {
  z-index: 2 !important;
}

.zindex-3 {
  z-index: 3 !important;
}

.zindex-4 {
  z-index: 4 !important;
}

.zindex-5 {
  z-index: 5 !important;
}

.border {
  border: 1px solid #d9dee3 !important;
}

.border-0 {
  border: 0 !important;
}

.border-solid {
  border-style: solid !important;
}

.border-dashed {
  border-style: dashed !important;
}

.border-none {
  border-style: none !important;
}

.border-top {
  border-top: 1px solid #d9dee3 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-bottom {
  border-bottom: 1px solid #d9dee3 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-primary {
  border-color: #696cff !important;
}

.border-secondary {
  border-color: #8592a3 !important;
}

.border-success {
  border-color: #71dd37 !important;
}

.border-info {
  border-color: #03c3ec !important;
}

.border-warning {
  border-color: #ffab00 !important;
}

.border-danger {
  border-color: #ff3e1d !important;
}

.border-light {
  border-color: rgba(67, 89, 113, 0.1) !important;
}

.border-dark {
  border-color: #233446 !important;
}

.border-gray {
  border-color: rgba(67, 89, 113, 0.1) !important;
}

.border-white {
  border-color: #fff !important;
}

.border-transparent {
  border-color: transparent !important;
}

.border-label-primary {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-primary-rgb), var(--bs-border-opacity)) !important;
}

.border-label-secondary {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-secondary-rgb), var(--bs-border-opacity)) !important;
}

.border-label-success {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;
}

.border-label-info {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important;
}

.border-label-warning {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-warning-rgb), var(--bs-border-opacity)) !important;
}

.border-label-danger {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-danger-rgb), var(--bs-border-opacity)) !important;
}

.border-label-light {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-light-rgb), var(--bs-border-opacity)) !important;
}

.border-label-dark {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important;
}

.border-label-gray {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-gray-rgb), var(--bs-border-opacity)) !important;
}

.border-label-white {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important;
}

.border-1 {
  border-width: 1px !important;
}

.border-2 {
  border-width: 2px !important;
}

.border-3 {
  border-width: 3px !important;
}

.border-4 {
  border-width: 4px !important;
}

.border-5 {
  border-width: 5px !important;
}

.w-px-20 {
  width: 20px !important;
}

.w-px-30 {
  width: 30px !important;
}

.w-px-40 {
  width: 40px !important;
}

.w-px-50 {
  width: 50px !important;
}

.w-px-75 {
  width: 75px !important;
}

.w-px-100 {
  width: 100px !important;
}

.w-px-150 {
  width: 150px !important;
}

.w-px-200 {
  width: 200px !important;
}

.w-px-250 {
  width: 250px !important;
}

.w-px-300 {
  width: 300px !important;
}

.w-px-350 {
  width: 350px !important;
}

.w-px-400 {
  width: 400px !important;
}

.w-px-500 {
  width: 500px !important;
}

.w-px-600 {
  width: 600px !important;
}

.w-px-700 {
  width: 700px !important;
}

.w-px-800 {
  width: 800px !important;
}

.w-auto {
  width: auto !important;
}

.w-20 {
  width: 20% !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-60 {
  width: 60% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.mw-100 {
  max-width: 100% !important;
}

.vw-100 {
  width: 100vw !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.h-px-20 {
  height: 20px !important;
}

.h-px-30 {
  height: 30px !important;
}

.h-px-40 {
  height: 40px !important;
}

.h-px-50 {
  height: 50px !important;
}

.h-px-75 {
  height: 75px !important;
}

.h-px-100 {
  height: 100px !important;
}

.h-px-150 {
  height: 150px !important;
}

.h-px-200 {
  height: 200px !important;
}

.h-px-250 {
  height: 250px !important;
}

.h-px-300 {
  height: 300px !important;
}

.h-px-350 {
  height: 350px !important;
}

.h-px-400 {
  height: 400px !important;
}

.h-px-500 {
  height: 500px !important;
}

.h-px-600 {
  height: 600px !important;
}

.h-px-700 {
  height: 700px !important;
}

.h-px-800 {
  height: 800px !important;
}

.h-auto {
  height: auto !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.vh-100 {
  height: 100vh !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-row {
  flex-direction: row !important;
}

.flex-column {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.gap-0 {
  gap: 0 !important;
}

.gap-1 {
  gap: 0.25rem !important;
}

.gap-2 {
  gap: 0.5rem !important;
}

.gap-3 {
  gap: 1rem !important;
}

.gap-4 {
  gap: 1.5rem !important;
}

.gap-5 {
  gap: 3rem !important;
}

.justify-content-start {
  justify-content: flex-start !important;
}

.justify-content-end {
  justify-content: flex-end !important;
}

.justify-content-center {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.justify-content-evenly {
  justify-content: space-evenly !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch {
  align-self: stretch !important;
}

.order-first {
  order: -1 !important;
}

.order-0 {
  order: 0 !important;
}

.order-1 {
  order: 1 !important;
}

.order-2 {
  order: 2 !important;
}

.order-3 {
  order: 3 !important;
}

.order-4 {
  order: 4 !important;
}

.order-5 {
  order: 5 !important;
}

.order-last {
  order: 6 !important;
}

.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-1 {
  margin-top: 0.25rem !important;
}

.mt-2 {
  margin-top: 0.5rem !important;
}

.mt-3 {
  margin-top: 1rem !important;
}

.mt-4 {
  margin-top: 1.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1 {
  margin-bottom: 0.25rem !important;
}

.mb-2 {
  margin-bottom: 0.5rem !important;
}

.mb-3 {
  margin-bottom: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.m-n1 {
  margin: -0.25rem !important;
}

.m-n2 {
  margin: -0.5rem !important;
}

.m-n3 {
  margin: -1rem !important;
}

.m-n4 {
  margin: -1.5rem !important;
}

.m-n5 {
  margin: -3rem !important;
}

.mx-n1 {
  margin-right: -0.25rem !important;
  margin-left: -0.25rem !important;
}

.mx-n2 {
  margin-right: -0.5rem !important;
  margin-left: -0.5rem !important;
}

.mx-n3 {
  margin-right: -1rem !important;
  margin-left: -1rem !important;
}

.mx-n4 {
  margin-right: -1.5rem !important;
  margin-left: -1.5rem !important;
}

.mx-n5 {
  margin-right: -3rem !important;
  margin-left: -3rem !important;
}

.my-n1 {
  margin-top: -0.25rem !important;
  margin-bottom: -0.25rem !important;
}

.my-n2 {
  margin-top: -0.5rem !important;
  margin-bottom: -0.5rem !important;
}

.my-n3 {
  margin-top: -1rem !important;
  margin-bottom: -1rem !important;
}

.my-n4 {
  margin-top: -1.5rem !important;
  margin-bottom: -1.5rem !important;
}

.my-n5 {
  margin-top: -3rem !important;
  margin-bottom: -3rem !important;
}

.mt-n1 {
  margin-top: -0.25rem !important;
}

.mt-n2 {
  margin-top: -0.5rem !important;
}

.mt-n3 {
  margin-top: -1rem !important;
}

.mt-n4 {
  margin-top: -1.5rem !important;
}

.mt-n5 {
  margin-top: -3rem !important;
}

.mb-n1 {
  margin-bottom: -0.25rem !important;
}

.mb-n2 {
  margin-bottom: -0.5rem !important;
}

.mb-n3 {
  margin-bottom: -1rem !important;
}

.mb-n4 {
  margin-bottom: -1.5rem !important;
}

.mb-n5 {
  margin-bottom: -3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}

.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.25rem !important;
}

.pt-2 {
  padding-top: 0.5rem !important;
}

.pt-3 {
  padding-top: 1rem !important;
}

.pt-4 {
  padding-top: 1.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.25rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}

.pb-3 {
  padding-bottom: 1rem !important;
}

.pb-4 {
  padding-bottom: 1.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
  font-size: calc(1.3625rem + 1.35vw) !important;
}

.fs-2 {
  font-size: calc(1.325rem + 0.9vw) !important;
}

.fs-3 {
  font-size: calc(1.2875rem + 0.45vw) !important;
}

.fs-4 {
  font-size: calc(1.2625rem + 0.15vw) !important;
}

.fs-5 {
  font-size: 1.125rem !important;
}

.fs-6 {
  font-size: 0.9375rem !important;
}

.fs-tiny {
  font-size: 70% !important;
}

.fs-big {
  font-size: 112% !important;
}

.fs-large {
  font-size: 150% !important;
}

.fs-xlarge {
  font-size: 170% !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-lighter {
  font-weight: lighter !important;
}

.fw-light {
  font-weight: 300 !important;
}

.fw-normal {
  font-weight: 400 !important;
}

.fw-medium {
  font-weight: 500 !important;
}

.fw-semibold {
  font-weight: 600 !important;
}

.fw-bold {
  font-weight: 700 !important;
}

.fw-bolder {
  font-weight: bolder !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-inherit {
  line-height: inherit !important;
}

.lh-sm {
  line-height: 1.5 !important;
}

.lh-base {
  line-height: 1.53 !important;
}

.lh-lg {
  line-height: 1.5 !important;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-decoration-underline {
  text-decoration: underline !important;
}

.text-decoration-line-through {
  text-decoration: line-through !important;
}

.text-none {
  text-transform: none !important;
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
}

.text-secondary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}

.text-success {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
}

.text-info {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
}

.text-warning {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
}

.text-danger {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
}

.text-light {
  --bs-text-opacity: 1;
  color: #b4bdc6 !important;
}

.text-dark {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
}

.text-gray {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-gray-rgb), var(--bs-text-opacity)) !important;
}

.text-black {
  color: #000 !important;
}

.text-white {
  --bs-text-opacity: 1;
  color: #fff !important;
}

.text-body {
  --bs-text-opacity: 1;
  color: #697a8d !important;
}

.text-muted {
  --bs-text-opacity: 1;
  color: #8688fc !important;
}

.text-black-50 {
  --bs-text-opacity: 1;
  color: rgba(67, 89, 113, 0.5) !important;
}

.text-white-50 {
  --bs-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-heading {
  --bs-text-opacity: 1;
  color: #566a7f !important;
}

.text-reset {
  --bs-text-opacity: 1;
  color: inherit !important;
}

.bg-primary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}

.bg-info {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
}

.bg-warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
}

.bg-danger {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
}

.bg-light {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
}

.bg-dark {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}

.bg-gray {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-gray-rgb), var(--bs-bg-opacity)) !important;
}

.bg-black {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
}

.bg-white {
  --bs-bg-opacity: 1;
  background-color: #fff !important;
}

.bg-body {
  --bs-bg-opacity: 1;
  background-color: #f5f5f9 !important;
}

.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important;
}

.bg-lighter {
  --bs-bg-opacity: 1;
  background-color: rgba(67, 89, 113, 0.05) !important;
}

.bg-lightest {
  --bs-bg-opacity: 1;
  background-color: rgba(67, 89, 113, 0.025) !important;
}

.bg-gradient {
  background-image: var(--bs-gradient) !important;
}

.user-select-all {
  user-select: all !important;
}

.user-select-auto {
  user-select: auto !important;
}

.user-select-none {
  user-select: none !important;
}

.pe-none {
  pointer-events: none !important;
}

.pe-auto {
  pointer-events: auto !important;
}

.rounded {
  border-radius: 0.375rem !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.rounded-1 {
  border-radius: 0.25rem !important;
}

.rounded-2 {
  border-radius: 0.375rem !important;
}

.rounded-3 {
  border-radius: 0.5rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-top {
  border-top-left-radius: 0.375rem !important;
  border-top-right-radius: 0.375rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.375rem !important;
  border-bottom-left-radius: 0.375rem !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

.cursor-pointer {
  cursor: pointer !important;
}

.cursor-move {
  cursor: move !important;
}

.cursor-grab {
  cursor: grab !important;
}

@media (min-width: 576px) {
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-grid {
    display: grid !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
  .d-sm-none {
    display: none !important;
  }
  .border-sm-solid {
    border-style: solid !important;
  }
  .border-sm-dashed {
    border-style: dashed !important;
  }
  .border-sm-none {
    border-style: none !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-sm-0 {
    gap: 0 !important;
  }
  .gap-sm-1 {
    gap: 0.25rem !important;
  }
  .gap-sm-2 {
    gap: 0.5rem !important;
  }
  .gap-sm-3 {
    gap: 1rem !important;
  }
  .gap-sm-4 {
    gap: 1.5rem !important;
  }
  .gap-sm-5 {
    gap: 3rem !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .justify-content-sm-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
  .order-sm-first {
    order: -1 !important;
  }
  .order-sm-0 {
    order: 0 !important;
  }
  .order-sm-1 {
    order: 1 !important;
  }
  .order-sm-2 {
    order: 2 !important;
  }
  .order-sm-3 {
    order: 3 !important;
  }
  .order-sm-4 {
    order: 4 !important;
  }
  .order-sm-5 {
    order: 5 !important;
  }
  .order-sm-last {
    order: 6 !important;
  }
  .m-sm-0 {
    margin: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-3 {
    margin-top: 1rem !important;
  }
  .mt-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-5 {
    margin-top: 3rem !important;
  }
  .mt-sm-auto {
    margin-top: auto !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-auto {
    margin-bottom: auto !important;
  }
  .m-sm-n1 {
    margin: -0.25rem !important;
  }
  .m-sm-n2 {
    margin: -0.5rem !important;
  }
  .m-sm-n3 {
    margin: -1rem !important;
  }
  .m-sm-n4 {
    margin: -1.5rem !important;
  }
  .m-sm-n5 {
    margin: -3rem !important;
  }
  .mx-sm-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-sm-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-sm-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-sm-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-sm-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-sm-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-sm-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-sm-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-sm-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-sm-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-sm-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-sm-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-sm-n3 {
    margin-top: -1rem !important;
  }
  .mt-sm-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-sm-n5 {
    margin-top: -3rem !important;
  }
  .mb-sm-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-sm-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-sm-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-sm-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-sm-n5 {
    margin-bottom: -3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-sm-0 {
    padding-top: 0 !important;
  }
  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-3 {
    padding-top: 1rem !important;
  }
  .pt-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pt-sm-5 {
    padding-top: 3rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0 !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 3rem !important;
  }
}
@media (min-width: 768px) {
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-grid {
    display: grid !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
  .d-md-none {
    display: none !important;
  }
  .border-md-solid {
    border-style: solid !important;
  }
  .border-md-dashed {
    border-style: dashed !important;
  }
  .border-md-none {
    border-style: none !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-md-0 {
    gap: 0 !important;
  }
  .gap-md-1 {
    gap: 0.25rem !important;
  }
  .gap-md-2 {
    gap: 0.5rem !important;
  }
  .gap-md-3 {
    gap: 1rem !important;
  }
  .gap-md-4 {
    gap: 1.5rem !important;
  }
  .gap-md-5 {
    gap: 3rem !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .justify-content-md-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
  .order-md-first {
    order: -1 !important;
  }
  .order-md-0 {
    order: 0 !important;
  }
  .order-md-1 {
    order: 1 !important;
  }
  .order-md-2 {
    order: 2 !important;
  }
  .order-md-3 {
    order: 3 !important;
  }
  .order-md-4 {
    order: 4 !important;
  }
  .order-md-5 {
    order: 5 !important;
  }
  .order-md-last {
    order: 6 !important;
  }
  .m-md-0 {
    margin: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-md-0 {
    margin-top: 0 !important;
  }
  .mt-md-1 {
    margin-top: 0.25rem !important;
  }
  .mt-md-2 {
    margin-top: 0.5rem !important;
  }
  .mt-md-3 {
    margin-top: 1rem !important;
  }
  .mt-md-4 {
    margin-top: 1.5rem !important;
  }
  .mt-md-5 {
    margin-top: 3rem !important;
  }
  .mt-md-auto {
    margin-top: auto !important;
  }
  .mb-md-0 {
    margin-bottom: 0 !important;
  }
  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-3 {
    margin-bottom: 1rem !important;
  }
  .mb-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-5 {
    margin-bottom: 3rem !important;
  }
  .mb-md-auto {
    margin-bottom: auto !important;
  }
  .m-md-n1 {
    margin: -0.25rem !important;
  }
  .m-md-n2 {
    margin: -0.5rem !important;
  }
  .m-md-n3 {
    margin: -1rem !important;
  }
  .m-md-n4 {
    margin: -1.5rem !important;
  }
  .m-md-n5 {
    margin: -3rem !important;
  }
  .mx-md-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-md-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-md-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-md-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-md-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-md-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-md-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-md-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-md-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-md-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-md-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-md-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-md-n3 {
    margin-top: -1rem !important;
  }
  .mt-md-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-md-n5 {
    margin-top: -3rem !important;
  }
  .mb-md-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-md-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-md-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-md-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-md-n5 {
    margin-bottom: -3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-md-0 {
    padding-top: 0 !important;
  }
  .pt-md-1 {
    padding-top: 0.25rem !important;
  }
  .pt-md-2 {
    padding-top: 0.5rem !important;
  }
  .pt-md-3 {
    padding-top: 1rem !important;
  }
  .pt-md-4 {
    padding-top: 1.5rem !important;
  }
  .pt-md-5 {
    padding-top: 3rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0 !important;
  }
  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-3 {
    padding-bottom: 1rem !important;
  }
  .pb-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-md-5 {
    padding-bottom: 3rem !important;
  }
}
@media (min-width: 992px) {
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-grid {
    display: grid !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
  .d-lg-none {
    display: none !important;
  }
  .border-lg-solid {
    border-style: solid !important;
  }
  .border-lg-dashed {
    border-style: dashed !important;
  }
  .border-lg-none {
    border-style: none !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-lg-0 {
    gap: 0 !important;
  }
  .gap-lg-1 {
    gap: 0.25rem !important;
  }
  .gap-lg-2 {
    gap: 0.5rem !important;
  }
  .gap-lg-3 {
    gap: 1rem !important;
  }
  .gap-lg-4 {
    gap: 1.5rem !important;
  }
  .gap-lg-5 {
    gap: 3rem !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .justify-content-lg-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
  .order-lg-first {
    order: -1 !important;
  }
  .order-lg-0 {
    order: 0 !important;
  }
  .order-lg-1 {
    order: 1 !important;
  }
  .order-lg-2 {
    order: 2 !important;
  }
  .order-lg-3 {
    order: 3 !important;
  }
  .order-lg-4 {
    order: 4 !important;
  }
  .order-lg-5 {
    order: 5 !important;
  }
  .order-lg-last {
    order: 6 !important;
  }
  .m-lg-0 {
    margin: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-lg-0 {
    margin-top: 0 !important;
  }
  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-3 {
    margin-top: 1rem !important;
  }
  .mt-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-5 {
    margin-top: 3rem !important;
  }
  .mt-lg-auto {
    margin-top: auto !important;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-auto {
    margin-bottom: auto !important;
  }
  .m-lg-n1 {
    margin: -0.25rem !important;
  }
  .m-lg-n2 {
    margin: -0.5rem !important;
  }
  .m-lg-n3 {
    margin: -1rem !important;
  }
  .m-lg-n4 {
    margin: -1.5rem !important;
  }
  .m-lg-n5 {
    margin: -3rem !important;
  }
  .mx-lg-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-lg-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-lg-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-lg-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-lg-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-lg-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-lg-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-lg-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-lg-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-lg-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-lg-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-lg-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-lg-n3 {
    margin-top: -1rem !important;
  }
  .mt-lg-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-lg-n5 {
    margin-top: -3rem !important;
  }
  .mb-lg-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-lg-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-lg-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-lg-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-lg-n5 {
    margin-bottom: -3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-lg-0 {
    padding-top: 0 !important;
  }
  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-3 {
    padding-top: 1rem !important;
  }
  .pt-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pt-lg-5 {
    padding-top: 3rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0 !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 3rem !important;
  }
}
@media (min-width: 1200px) {
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-grid {
    display: grid !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
  .d-xl-none {
    display: none !important;
  }
  .border-xl-solid {
    border-style: solid !important;
  }
  .border-xl-dashed {
    border-style: dashed !important;
  }
  .border-xl-none {
    border-style: none !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-xl-0 {
    gap: 0 !important;
  }
  .gap-xl-1 {
    gap: 0.25rem !important;
  }
  .gap-xl-2 {
    gap: 0.5rem !important;
  }
  .gap-xl-3 {
    gap: 1rem !important;
  }
  .gap-xl-4 {
    gap: 1.5rem !important;
  }
  .gap-xl-5 {
    gap: 3rem !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .justify-content-xl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
  .order-xl-first {
    order: -1 !important;
  }
  .order-xl-0 {
    order: 0 !important;
  }
  .order-xl-1 {
    order: 1 !important;
  }
  .order-xl-2 {
    order: 2 !important;
  }
  .order-xl-3 {
    order: 3 !important;
  }
  .order-xl-4 {
    order: 4 !important;
  }
  .order-xl-5 {
    order: 5 !important;
  }
  .order-xl-last {
    order: 6 !important;
  }
  .m-xl-0 {
    margin: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xl-0 {
    margin-top: 0 !important;
  }
  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-3 {
    margin-top: 1rem !important;
  }
  .mt-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-5 {
    margin-top: 3rem !important;
  }
  .mt-xl-auto {
    margin-top: auto !important;
  }
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-auto {
    margin-bottom: auto !important;
  }
  .m-xl-n1 {
    margin: -0.25rem !important;
  }
  .m-xl-n2 {
    margin: -0.5rem !important;
  }
  .m-xl-n3 {
    margin: -1rem !important;
  }
  .m-xl-n4 {
    margin: -1.5rem !important;
  }
  .m-xl-n5 {
    margin: -3rem !important;
  }
  .mx-xl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-xl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xl-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-xl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-xl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-xl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xl-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-xl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-xl-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-xl-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-xl-n3 {
    margin-top: -1rem !important;
  }
  .mt-xl-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-xl-n5 {
    margin-top: -3rem !important;
  }
  .mb-xl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-xl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xl-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-xl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-xl-n5 {
    margin-bottom: -3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xl-0 {
    padding-top: 0 !important;
  }
  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xl-3 {
    padding-top: 1rem !important;
  }
  .pt-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xl-5 {
    padding-top: 3rem !important;
  }
  .pb-xl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xl-5 {
    padding-bottom: 3rem !important;
  }
}
@media (min-width: 1400px) {
  .d-xxl-inline {
    display: inline !important;
  }
  .d-xxl-inline-block {
    display: inline-block !important;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-grid {
    display: grid !important;
  }
  .d-xxl-table {
    display: table !important;
  }
  .d-xxl-table-row {
    display: table-row !important;
  }
  .d-xxl-table-cell {
    display: table-cell !important;
  }
  .d-xxl-flex {
    display: flex !important;
  }
  .d-xxl-inline-flex {
    display: inline-flex !important;
  }
  .d-xxl-none {
    display: none !important;
  }
  .border-xxl-solid {
    border-style: solid !important;
  }
  .border-xxl-dashed {
    border-style: dashed !important;
  }
  .border-xxl-none {
    border-style: none !important;
  }
  .flex-xxl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xxl-row {
    flex-direction: row !important;
  }
  .flex-xxl-column {
    flex-direction: column !important;
  }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xxl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-xxl-0 {
    gap: 0 !important;
  }
  .gap-xxl-1 {
    gap: 0.25rem !important;
  }
  .gap-xxl-2 {
    gap: 0.5rem !important;
  }
  .gap-xxl-3 {
    gap: 1rem !important;
  }
  .gap-xxl-4 {
    gap: 1.5rem !important;
  }
  .gap-xxl-5 {
    gap: 3rem !important;
  }
  .justify-content-xxl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xxl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xxl-center {
    justify-content: center !important;
  }
  .justify-content-xxl-between {
    justify-content: space-between !important;
  }
  .justify-content-xxl-around {
    justify-content: space-around !important;
  }
  .justify-content-xxl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xxl-start {
    align-items: flex-start !important;
  }
  .align-items-xxl-end {
    align-items: flex-end !important;
  }
  .align-items-xxl-center {
    align-items: center !important;
  }
  .align-items-xxl-baseline {
    align-items: baseline !important;
  }
  .align-items-xxl-stretch {
    align-items: stretch !important;
  }
  .align-content-xxl-start {
    align-content: flex-start !important;
  }
  .align-content-xxl-end {
    align-content: flex-end !important;
  }
  .align-content-xxl-center {
    align-content: center !important;
  }
  .align-content-xxl-between {
    align-content: space-between !important;
  }
  .align-content-xxl-around {
    align-content: space-around !important;
  }
  .align-content-xxl-stretch {
    align-content: stretch !important;
  }
  .align-self-xxl-auto {
    align-self: auto !important;
  }
  .align-self-xxl-start {
    align-self: flex-start !important;
  }
  .align-self-xxl-end {
    align-self: flex-end !important;
  }
  .align-self-xxl-center {
    align-self: center !important;
  }
  .align-self-xxl-baseline {
    align-self: baseline !important;
  }
  .align-self-xxl-stretch {
    align-self: stretch !important;
  }
  .order-xxl-first {
    order: -1 !important;
  }
  .order-xxl-0 {
    order: 0 !important;
  }
  .order-xxl-1 {
    order: 1 !important;
  }
  .order-xxl-2 {
    order: 2 !important;
  }
  .order-xxl-3 {
    order: 3 !important;
  }
  .order-xxl-4 {
    order: 4 !important;
  }
  .order-xxl-5 {
    order: 5 !important;
  }
  .order-xxl-last {
    order: 6 !important;
  }
  .m-xxl-0 {
    margin: 0 !important;
  }
  .m-xxl-1 {
    margin: 0.25rem !important;
  }
  .m-xxl-2 {
    margin: 0.5rem !important;
  }
  .m-xxl-3 {
    margin: 1rem !important;
  }
  .m-xxl-4 {
    margin: 1.5rem !important;
  }
  .m-xxl-5 {
    margin: 3rem !important;
  }
  .m-xxl-auto {
    margin: auto !important;
  }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xxl-0 {
    margin-top: 0 !important;
  }
  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xxl-3 {
    margin-top: 1rem !important;
  }
  .mt-xxl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xxl-5 {
    margin-top: 3rem !important;
  }
  .mt-xxl-auto {
    margin-top: auto !important;
  }
  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xxl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xxl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xxl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xxl-auto {
    margin-bottom: auto !important;
  }
  .m-xxl-n1 {
    margin: -0.25rem !important;
  }
  .m-xxl-n2 {
    margin: -0.5rem !important;
  }
  .m-xxl-n3 {
    margin: -1rem !important;
  }
  .m-xxl-n4 {
    margin: -1.5rem !important;
  }
  .m-xxl-n5 {
    margin: -3rem !important;
  }
  .mx-xxl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-xxl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xxl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xxl-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-xxl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-xxl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-xxl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xxl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xxl-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-xxl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-xxl-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-xxl-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-xxl-n3 {
    margin-top: -1rem !important;
  }
  .mt-xxl-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-xxl-n5 {
    margin-top: -3rem !important;
  }
  .mb-xxl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-xxl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xxl-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-xxl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-xxl-n5 {
    margin-bottom: -3rem !important;
  }
  .p-xxl-0 {
    padding: 0 !important;
  }
  .p-xxl-1 {
    padding: 0.25rem !important;
  }
  .p-xxl-2 {
    padding: 0.5rem !important;
  }
  .p-xxl-3 {
    padding: 1rem !important;
  }
  .p-xxl-4 {
    padding: 1.5rem !important;
  }
  .p-xxl-5 {
    padding: 3rem !important;
  }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xxl-0 {
    padding-top: 0 !important;
  }
  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xxl-3 {
    padding-top: 1rem !important;
  }
  .pt-xxl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xxl-5 {
    padding-top: 3rem !important;
  }
  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xxl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xxl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xxl-5 {
    padding-bottom: 3rem !important;
  }
}
@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2.375rem !important;
  }
  .fs-2 {
    font-size: 2rem !important;
  }
  .fs-3 {
    font-size: 1.625rem !important;
  }
  .fs-4 {
    font-size: 1.375rem !important;
  }
}
@media print {
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-grid {
    display: grid !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
  .d-print-none {
    display: none !important;
  }
}
.zindex-1 {
  z-index: 1 !important;
}

.zindex-2 {
  z-index: 2 !important;
}

.zindex-3 {
  z-index: 3 !important;
}

.zindex-4 {
  z-index: 4 !important;
}

.zindex-5 {
  z-index: 5 !important;
}

.border-solid {
  border-style: solid !important;
}

.border-dashed {
  border-style: dashed !important;
}

.border-none {
  border-style: none !important;
}

.border-label-primary {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-primary-rgb), var(--bs-border-opacity)) !important;
}

.border-label-secondary {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-secondary-rgb), var(--bs-border-opacity)) !important;
}

.border-label-success {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;
}

.border-label-info {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important;
}

.border-label-warning {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-warning-rgb), var(--bs-border-opacity)) !important;
}

.border-label-danger {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-danger-rgb), var(--bs-border-opacity)) !important;
}

.border-label-light {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-light-rgb), var(--bs-border-opacity)) !important;
}

.border-label-dark {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important;
}

.border-label-gray {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-gray-rgb), var(--bs-border-opacity)) !important;
}

.border-label-white {
  --bs-border-opacity: 0.4;
  border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important;
}

.float-start {
  float: left !important;
}

.float-end {
  float: right !important;
}

.float-none {
  float: none !important;
}

.end-0 {
  right: 0 !important;
}

.end-50 {
  right: 50% !important;
}

.end-100 {
  right: 100% !important;
}

.start-0 {
  left: 0 !important;
}

.start-50 {
  left: 50% !important;
}

.start-100 {
  left: 100% !important;
}

.translate-middle {
  transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
  transform: translateX(-50%) !important;
}

.translate-middle-y {
  transform: translateY(-50%) !important;
}

.border-end {
  border-right: 1px solid #d9dee3 !important;
}

.border-end-0 {
  border-right: 0 !important;
}

.border-start {
  border-left: 1px solid #d9dee3 !important;
}

.border-start-0 {
  border-left: 0 !important;
}

.text-start {
  text-align: left !important;
}

.text-end {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.rounded-end {
  border-top-right-radius: 0.375rem !important;
  border-bottom-right-radius: 0.375rem !important;
}

.rounded-start {
  border-bottom-left-radius: 0.375rem !important;
  border-top-left-radius: 0.375rem !important;
}

.rounded-start-top {
  border-top-left-radius: 0.375rem !important;
}

.rounded-start-bottom {
  border-bottom-left-radius: 0.375rem !important;
}

.rounded-end-top {
  border-top-right-radius: 0.375rem !important;
}

.rounded-end-bottom {
  border-bottom-right-radius: 0.375rem !important;
}

.me-0 {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.25rem !important;
}

.me-2 {
  margin-right: 0.5rem !important;
}

.me-3 {
  margin-right: 1rem !important;
}

.me-4 {
  margin-right: 1.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-auto {
  margin-right: auto !important;
}

.ms-0 {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.25rem !important;
}

.ms-2 {
  margin-left: 0.5rem !important;
}

.ms-3 {
  margin-left: 1rem !important;
}

.ms-4 {
  margin-left: 1.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-auto {
  margin-left: auto !important;
}

.me-n1 {
  margin-right: -0.25rem !important;
}

.me-n2 {
  margin-right: -0.5rem !important;
}

.me-n3 {
  margin-right: -1rem !important;
}

.me-n4 {
  margin-right: -1.5rem !important;
}

.me-n5 {
  margin-right: -3rem !important;
}

.ms-n1 {
  margin-left: -0.25rem !important;
}

.ms-n2 {
  margin-left: -0.5rem !important;
}

.ms-n3 {
  margin-left: -1rem !important;
}

.ms-n4 {
  margin-left: -1.5rem !important;
}

.ms-n5 {
  margin-left: -3rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.25rem !important;
}

.pe-2 {
  padding-right: 0.5rem !important;
}

.pe-3 {
  padding-right: 1rem !important;
}

.pe-4 {
  padding-right: 1.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.25rem !important;
}

.ps-2 {
  padding-left: 0.5rem !important;
}

.ps-3 {
  padding-left: 1rem !important;
}

.ps-4 {
  padding-left: 1.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.rotate-0 {
  transform: rotate(0deg) !important;
}

.rotate-90 {
  transform: rotate(90deg) !important;
}

.rotate-180 {
  transform: rotate(180deg) !important;
}

.rotate-270 {
  transform: rotate(270deg) !important;
}

.rotate-n90 {
  transform: rotate(-90deg) !important;
}

.rotate-n180 {
  transform: rotate(-180deg) !important;
}

.rotate-n270 {
  transform: rotate(-270deg) !important;
}

.scaleX-n1 {
  transform: scaleX(-1) !important;
}

.scaleY-n1 {
  transform: scaleY(-1) !important;
}

@media (min-width: 576px) {
  .border-sm-solid {
    border-style: solid !important;
  }
  .border-sm-dashed {
    border-style: dashed !important;
  }
  .border-sm-none {
    border-style: none !important;
  }
  .float-sm-start {
    float: left !important;
  }
  .float-sm-end {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
  .text-sm-start {
    text-align: left !important;
  }
  .text-sm-end {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
  .me-sm-0 {
    margin-right: 0 !important;
  }
  .me-sm-1 {
    margin-right: 0.25rem !important;
  }
  .me-sm-2 {
    margin-right: 0.5rem !important;
  }
  .me-sm-3 {
    margin-right: 1rem !important;
  }
  .me-sm-4 {
    margin-right: 1.5rem !important;
  }
  .me-sm-5 {
    margin-right: 3rem !important;
  }
  .me-sm-auto {
    margin-right: auto !important;
  }
  .ms-sm-0 {
    margin-left: 0 !important;
  }
  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }
  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }
  .ms-sm-3 {
    margin-left: 1rem !important;
  }
  .ms-sm-4 {
    margin-left: 1.5rem !important;
  }
  .ms-sm-5 {
    margin-left: 3rem !important;
  }
  .ms-sm-auto {
    margin-left: auto !important;
  }
  .me-sm-n1 {
    margin-right: -0.25rem !important;
  }
  .me-sm-n2 {
    margin-right: -0.5rem !important;
  }
  .me-sm-n3 {
    margin-right: -1rem !important;
  }
  .me-sm-n4 {
    margin-right: -1.5rem !important;
  }
  .me-sm-n5 {
    margin-right: -3rem !important;
  }
  .ms-sm-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-sm-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-sm-n3 {
    margin-left: -1rem !important;
  }
  .ms-sm-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-sm-n5 {
    margin-left: -3rem !important;
  }
  .pe-sm-0 {
    padding-right: 0 !important;
  }
  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pe-sm-3 {
    padding-right: 1rem !important;
  }
  .pe-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pe-sm-5 {
    padding-right: 3rem !important;
  }
  .ps-sm-0 {
    padding-left: 0 !important;
  }
  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }
  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }
  .ps-sm-3 {
    padding-left: 1rem !important;
  }
  .ps-sm-4 {
    padding-left: 1.5rem !important;
  }
  .ps-sm-5 {
    padding-left: 3rem !important;
  }
}
@media (min-width: 768px) {
  .border-md-solid {
    border-style: solid !important;
  }
  .border-md-dashed {
    border-style: dashed !important;
  }
  .border-md-none {
    border-style: none !important;
  }
  .float-md-start {
    float: left !important;
  }
  .float-md-end {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
  .text-md-start {
    text-align: left !important;
  }
  .text-md-end {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
  .me-md-0 {
    margin-right: 0 !important;
  }
  .me-md-1 {
    margin-right: 0.25rem !important;
  }
  .me-md-2 {
    margin-right: 0.5rem !important;
  }
  .me-md-3 {
    margin-right: 1rem !important;
  }
  .me-md-4 {
    margin-right: 1.5rem !important;
  }
  .me-md-5 {
    margin-right: 3rem !important;
  }
  .me-md-auto {
    margin-right: auto !important;
  }
  .ms-md-0 {
    margin-left: 0 !important;
  }
  .ms-md-1 {
    margin-left: 0.25rem !important;
  }
  .ms-md-2 {
    margin-left: 0.5rem !important;
  }
  .ms-md-3 {
    margin-left: 1rem !important;
  }
  .ms-md-4 {
    margin-left: 1.5rem !important;
  }
  .ms-md-5 {
    margin-left: 3rem !important;
  }
  .ms-md-auto {
    margin-left: auto !important;
  }
  .me-md-n1 {
    margin-right: -0.25rem !important;
  }
  .me-md-n2 {
    margin-right: -0.5rem !important;
  }
  .me-md-n3 {
    margin-right: -1rem !important;
  }
  .me-md-n4 {
    margin-right: -1.5rem !important;
  }
  .me-md-n5 {
    margin-right: -3rem !important;
  }
  .ms-md-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-md-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-md-n3 {
    margin-left: -1rem !important;
  }
  .ms-md-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-md-n5 {
    margin-left: -3rem !important;
  }
  .pe-md-0 {
    padding-right: 0 !important;
  }
  .pe-md-1 {
    padding-right: 0.25rem !important;
  }
  .pe-md-2 {
    padding-right: 0.5rem !important;
  }
  .pe-md-3 {
    padding-right: 1rem !important;
  }
  .pe-md-4 {
    padding-right: 1.5rem !important;
  }
  .pe-md-5 {
    padding-right: 3rem !important;
  }
  .ps-md-0 {
    padding-left: 0 !important;
  }
  .ps-md-1 {
    padding-left: 0.25rem !important;
  }
  .ps-md-2 {
    padding-left: 0.5rem !important;
  }
  .ps-md-3 {
    padding-left: 1rem !important;
  }
  .ps-md-4 {
    padding-left: 1.5rem !important;
  }
  .ps-md-5 {
    padding-left: 3rem !important;
  }
}
@media (min-width: 992px) {
  .border-lg-solid {
    border-style: solid !important;
  }
  .border-lg-dashed {
    border-style: dashed !important;
  }
  .border-lg-none {
    border-style: none !important;
  }
  .float-lg-start {
    float: left !important;
  }
  .float-lg-end {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
  .text-lg-start {
    text-align: left !important;
  }
  .text-lg-end {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
  .me-lg-0 {
    margin-right: 0 !important;
  }
  .me-lg-1 {
    margin-right: 0.25rem !important;
  }
  .me-lg-2 {
    margin-right: 0.5rem !important;
  }
  .me-lg-3 {
    margin-right: 1rem !important;
  }
  .me-lg-4 {
    margin-right: 1.5rem !important;
  }
  .me-lg-5 {
    margin-right: 3rem !important;
  }
  .me-lg-auto {
    margin-right: auto !important;
  }
  .ms-lg-0 {
    margin-left: 0 !important;
  }
  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }
  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }
  .ms-lg-3 {
    margin-left: 1rem !important;
  }
  .ms-lg-4 {
    margin-left: 1.5rem !important;
  }
  .ms-lg-5 {
    margin-left: 3rem !important;
  }
  .ms-lg-auto {
    margin-left: auto !important;
  }
  .me-lg-n1 {
    margin-right: -0.25rem !important;
  }
  .me-lg-n2 {
    margin-right: -0.5rem !important;
  }
  .me-lg-n3 {
    margin-right: -1rem !important;
  }
  .me-lg-n4 {
    margin-right: -1.5rem !important;
  }
  .me-lg-n5 {
    margin-right: -3rem !important;
  }
  .ms-lg-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-lg-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-lg-n3 {
    margin-left: -1rem !important;
  }
  .ms-lg-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-lg-n5 {
    margin-left: -3rem !important;
  }
  .pe-lg-0 {
    padding-right: 0 !important;
  }
  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pe-lg-3 {
    padding-right: 1rem !important;
  }
  .pe-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pe-lg-5 {
    padding-right: 3rem !important;
  }
  .ps-lg-0 {
    padding-left: 0 !important;
  }
  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }
  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }
  .ps-lg-3 {
    padding-left: 1rem !important;
  }
  .ps-lg-4 {
    padding-left: 1.5rem !important;
  }
  .ps-lg-5 {
    padding-left: 3rem !important;
  }
}
@media (min-width: 1200px) {
  .border-xl-solid {
    border-style: solid !important;
  }
  .border-xl-dashed {
    border-style: dashed !important;
  }
  .border-xl-none {
    border-style: none !important;
  }
  .float-xl-start {
    float: left !important;
  }
  .float-xl-end {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
  .text-xl-start {
    text-align: left !important;
  }
  .text-xl-end {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
  .me-xl-0 {
    margin-right: 0 !important;
  }
  .me-xl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xl-3 {
    margin-right: 1rem !important;
  }
  .me-xl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xl-5 {
    margin-right: 3rem !important;
  }
  .me-xl-auto {
    margin-right: auto !important;
  }
  .ms-xl-0 {
    margin-left: 0 !important;
  }
  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xl-3 {
    margin-left: 1rem !important;
  }
  .ms-xl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xl-5 {
    margin-left: 3rem !important;
  }
  .ms-xl-auto {
    margin-left: auto !important;
  }
  .me-xl-n1 {
    margin-right: -0.25rem !important;
  }
  .me-xl-n2 {
    margin-right: -0.5rem !important;
  }
  .me-xl-n3 {
    margin-right: -1rem !important;
  }
  .me-xl-n4 {
    margin-right: -1.5rem !important;
  }
  .me-xl-n5 {
    margin-right: -3rem !important;
  }
  .ms-xl-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-xl-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-xl-n3 {
    margin-left: -1rem !important;
  }
  .ms-xl-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-xl-n5 {
    margin-left: -3rem !important;
  }
  .pe-xl-0 {
    padding-right: 0 !important;
  }
  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xl-3 {
    padding-right: 1rem !important;
  }
  .pe-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xl-5 {
    padding-right: 3rem !important;
  }
  .ps-xl-0 {
    padding-left: 0 !important;
  }
  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xl-3 {
    padding-left: 1rem !important;
  }
  .ps-xl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xl-5 {
    padding-left: 3rem !important;
  }
}
@media (min-width: 1400px) {
  .border-xxl-solid {
    border-style: solid !important;
  }
  .border-xxl-dashed {
    border-style: dashed !important;
  }
  .border-xxl-none {
    border-style: none !important;
  }
  .float-xxl-start {
    float: left !important;
  }
  .float-xxl-end {
    float: right !important;
  }
  .float-xxl-none {
    float: none !important;
  }
  .text-xxl-start {
    text-align: left !important;
  }
  .text-xxl-end {
    text-align: right !important;
  }
  .text-xxl-center {
    text-align: center !important;
  }
  .me-xxl-0 {
    margin-right: 0 !important;
  }
  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xxl-3 {
    margin-right: 1rem !important;
  }
  .me-xxl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xxl-5 {
    margin-right: 3rem !important;
  }
  .me-xxl-auto {
    margin-right: auto !important;
  }
  .ms-xxl-0 {
    margin-left: 0 !important;
  }
  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xxl-3 {
    margin-left: 1rem !important;
  }
  .ms-xxl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xxl-5 {
    margin-left: 3rem !important;
  }
  .ms-xxl-auto {
    margin-left: auto !important;
  }
  .me-xxl-n1 {
    margin-right: -0.25rem !important;
  }
  .me-xxl-n2 {
    margin-right: -0.5rem !important;
  }
  .me-xxl-n3 {
    margin-right: -1rem !important;
  }
  .me-xxl-n4 {
    margin-right: -1.5rem !important;
  }
  .me-xxl-n5 {
    margin-right: -3rem !important;
  }
  .ms-xxl-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-xxl-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-xxl-n3 {
    margin-left: -1rem !important;
  }
  .ms-xxl-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-xxl-n5 {
    margin-left: -3rem !important;
  }
  .pe-xxl-0 {
    padding-right: 0 !important;
  }
  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xxl-3 {
    padding-right: 1rem !important;
  }
  .pe-xxl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xxl-5 {
    padding-right: 3rem !important;
  }
  .ps-xxl-0 {
    padding-left: 0 !important;
  }
  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xxl-3 {
    padding-left: 1rem !important;
  }
  .ps-xxl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xxl-5 {
    padding-left: 3rem !important;
  }
}
body {
  text-rendering: optimizeLegibility;
  font-smoothing: antialiased;
  -moz-font-feature-settings: "liga" on;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

@media (min-width: 768px) {
  button.list-group-item {
    outline: none;
  }
}
.app-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(67, 89, 113, 0.5);
  visibility: hidden;
  z-index: 3;
  transition: all 0.25s ease;
}
.app-overlay.show {
  visibility: visible;
}

.container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl,
.container-xxl {
  padding-right: 1rem;
  padding-left: 1rem;
}
@media (min-width: 992px) {
  .container,
  .container-fluid,
  .container-sm,
  .container-md,
  .container-lg,
  .container-xl,
  .container-xxl {
    padding-right: 1.625rem;
    padding-left: 1.625rem;
  }
}

.img-thumbnail {
  position: relative;
  display: block;
}
.img-thumbnail img {
  z-index: 1;
}

.img-thumbnail-content {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 3;
  display: block;
  opacity: 0;
  transition: all 0.2s ease-in-out;
  transform: translate(-50%, -50%);
}
.img-thumbnail:hover .img-thumbnail-content, .img-thumbnail:focus .img-thumbnail-content {
  opacity: 1;
}

.img-thumbnail-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: block;
  transition: all 0.2s ease-in-out;
}
.img-thumbnail:not(:hover):not(:focus) .img-thumbnail-overlay {
  opacity: 0 !important;
}

.img-thumbnail-shadow {
  transition: box-shadow 0.2s;
}
.img-thumbnail-shadow:hover, .img-thumbnail-shadow:focus {
  box-shadow: 0 5px 20px rgba(67, 89, 113, 0.4);
}

.img-thumbnail-zoom-in {
  overflow: hidden;
}
.img-thumbnail-zoom-in img {
  transition: all 0.3s ease-in-out;
  transform: translate3d(0);
}
.img-thumbnail-zoom-in .img-thumbnail-content {
  transform: translate(-50%, -50%) scale(0.6);
}
.img-thumbnail-zoom-in:hover img, .img-thumbnail-zoom-in:focus img {
  transform: scale(1.1);
}
.img-thumbnail-zoom-in:hover .img-thumbnail-content, .img-thumbnail-zoom-in:focus .img-thumbnail-content {
  transform: translate(-50%, -50%) scale(1);
}

@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .card,
  .card-body,
  .media,
  .flex-column,
  .tab-content {
    min-height: 1px;
  }
  img {
    min-height: 1px;
    height: auto;
  }
}
.buy-now .btn-buy-now {
  position: fixed;
  bottom: 3rem;
  right: 1.625rem;
  z-index: 1080;
  box-shadow: 0 1px 20px 1px #ff3e1d;
}
.buy-now .btn-buy-now:hover {
  box-shadow: none;
}

.ui-square,
.ui-rect,
.ui-rect-30,
.ui-rect-60,
.ui-rect-67,
.ui-rect-75 {
  position: relative !important;
  display: block !important;
  padding-top: 100% !important;
  width: 100% !important;
}

.ui-square {
  padding-top: 100% !important;
}

.ui-rect {
  padding-top: 50% !important;
}

.ui-rect-30 {
  padding-top: 30% !important;
}

.ui-rect-60 {
  padding-top: 60% !important;
}

.ui-rect-67 {
  padding-top: 67% !important;
}

.ui-rect-75 {
  padding-top: 75% !important;
}

.ui-square-content,
.ui-rect-content {
  position: absolute !important;
  top: 0 !important;
  right: 0 !important;
  bottom: 0 !important;
  left: 0 !important;
}

.text-strike-through {
  text-decoration: line-through;
}

.line-clamp-1 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
}

.line-clamp-2 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}

.line-clamp-3 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
}

.ui-stars,
.ui-star,
.ui-star > * {
  height: 1.1em;
  -webkit-user-drag: none;
  -khtml-user-drag: none;
  -moz-user-drag: none;
  -o-user-drag: none;
  user-drag: none;
}

.ui-stars {
  display: inline-block;
  vertical-align: middle;
  white-space: nowrap;
}

.ui-star {
  position: relative;
  display: block;
  float: left;
  width: 1.1em;
  height: 1.1em;
  text-decoration: none !important;
  font-size: 1.1em;
  line-height: 1;
  user-select: none;
}
.ui-star + .ui-star {
  margin-left: -0.1em;
}
.ui-star > *,
.ui-star > *::before,
.ui-star > *::after {
  position: absolute;
  left: 0.55em;
  height: 100%;
  font-size: 1em;
  line-height: 1;
  transform: translateX(-50%);
}
.ui-star > * {
  top: 0;
  width: 100%;
  text-align: center;
}
.ui-star > *:first-child {
  z-index: 10;
  display: none;
  overflow: hidden;
  color: #ffab00;
}
.ui-star > *:last-child {
  z-index: 5;
  display: block;
}
.ui-star.half-filled > *:first-child {
  width: 50%;
  transform: translateX(-100%);
}
.ui-star.filled > *:first-child, .ui-star.half-filled > *:first-child {
  display: block;
}
.ui-star.filled > *:last-child {
  display: none;
}

.ui-stars.hoverable .ui-star > *:first-child {
  display: block;
}

.ui-stars.hoverable .ui-star:first-child:not(.filled) > *:first-child,
.ui-stars.hoverable .ui-star:first-child:not(.filled) ~ .ui-star > *:first-child,
.ui-stars.hoverable .ui-star:first-child:not(.half-filled) > *:first-child,
.ui-stars.hoverable .ui-star:first-child:not(.half-filled) ~ .ui-star > *:first-child {
  display: none;
}

.ui-stars.hoverable .ui-star.filled > *:first-child,
.ui-stars.hoverable .ui-star.half-filled > *:first-child {
  display: block !important;
}

.ui-stars.hoverable:hover .ui-star > *:first-child {
  display: block !important;
  width: 100% !important;
  transform: translateX(-50%) !important;
}

.ui-stars.hoverable .ui-star:hover ~ .ui-star > *:first-child {
  display: none !important;
}
.ui-stars.hoverable .ui-star:hover ~ .ui-star > *:last-child {
  display: block !important;
}

.ui-bg-cover {
  background-color: rgba(0, 0, 0, 0);
  background-position: center center;
  background-size: cover;
}

.ui-bg-overlay-container,
.ui-bg-video-container {
  position: relative;
}
.ui-bg-overlay-container > *,
.ui-bg-video-container > * {
  position: relative;
}

.ui-bg-overlay-container .ui-bg-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: block;
}

.light-style .ui-bordered {
  border: 1px solid #d9dee3;
}
.light-style .ui-star > *:last-child {
  color: rgba(67, 89, 113, 0.2);
}

.layout-wrapper,
.layout-container {
  width: 100%;
  display: flex;
  flex: 1 1 auto;
  align-items: stretch;
}

.layout-page,
.content-wrapper,
.content-wrapper > *,
.layout-menu {
  min-height: 1px;
}

.layout-navbar,
.content-footer {
  flex: 0 0 auto;
}

.layout-page {
  display: flex;
  flex: 1 1 auto;
  align-items: stretch;
  padding: 0;
}
.layout-without-menu .layout-page {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.content-wrapper {
  display: flex;
  align-items: stretch;
  flex: 1 1 auto;
  flex-direction: column;
  justify-content: space-between;
}

.content-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100vw;
  height: 100vh;
  background-color: #435971;
}
.content-backdrop.fade {
  opacity: 0;
}
.content-backdrop.show {
  opacity: 0.5;
}
.layout-menu-fixed .content-backdrop {
  z-index: 10;
}
.content-backdrop.fade {
  z-index: -1;
}

.layout-navbar {
  position: relative;
  padding-top: 0.25rem;
  padding-bottom: 0.2rem;
  height: 3.875rem;
  flex-wrap: nowrap;
  color: #697a8d;
  z-index: 2;
}
.layout-navbar .navbar {
  transform: translate3d(0, 0, 0);
}
.layout-navbar .navbar-nav-right {
  flex-basis: 100%;
}
.layout-navbar .navbar-search-wrapper .search-input,
.layout-navbar .navbar-search-wrapper .input-group-text {
  background-color: transparent;
}
.layout-navbar.navbar-detached {
  width: calc(100% - (1.625rem * 2));
  margin: 0.75rem auto 0;
  border-radius: 0.375rem;
  padding: 0 1.5rem;
}
.layout-navbar.navbar-detached.container-xxl {
  max-width: calc(1440px - calc(1.625rem * 2));
}
.layout-navbar-fixed .layout-navbar.navbar-detached {
  width: calc(100% - calc(1.625rem * 2) - 16.25rem);
}
@media (max-width: 1199.98px) {
  .layout-navbar-fixed .layout-navbar.navbar-detached {
    width: calc(100% - (1.625rem * 2)) !important;
  }
}
@media (max-width: 991.98px) {
  .layout-navbar-fixed .layout-navbar.navbar-detached {
    width: calc(100% - (1rem * 2)) !important;
  }
}
.layout-navbar-fixed.layout-menu-collapsed .layout-navbar.navbar-detached {
  width: calc(100% - calc(1.625rem * 2) - 5.25rem);
}
@media (max-width: 1199.98px) {
  .layout-navbar.navbar-detached {
    width: calc(100vw - (100vw - 100%) - (1.625rem * 2)) !important;
  }
}
@media (max-width: 991.98px) {
  .layout-navbar.navbar-detached {
    width: calc(100vw - (100vw - 100%) - (1rem * 2)) !important;
  }
}
.layout-menu-collapsed .layout-navbar.navbar-detached, .layout-without-menu .layout-navbar.navbar-detached {
  width: calc(100% - (1.625rem * 2));
}
.layout-navbar .search-input-wrapper .search-toggler {
  position: absolute;
  top: 1.25rem;
  right: 1rem;
  z-index: 1;
}
.layout-navbar .search-input-wrapper .search-input {
  height: 100%;
  box-shadow: none;
}
.layout-navbar[class*=bg-]:not(.bg-navbar-theme) .nav-item .input-group-text,
.layout-navbar[class*=bg-]:not(.bg-navbar-theme) .nav-item .dropdown-toggle {
  color: #fff;
}
@media (max-width: 1199.98px) {
  .layout-navbar .navbar-nav .nav-item.dropdown .dropdown-menu {
    position: absolute;
  }
  .layout-navbar .navbar-nav .nav-item.dropdown .dropdown-menu .last-login {
    white-space: nowrap;
  }
}
@media (max-width: 767.98px) {
  .layout-navbar .navbar-nav .nav-item.dropdown {
    position: static;
    float: left;
  }
  .layout-navbar .navbar-nav .nav-item.dropdown .badge-notifications {
    top: auto;
  }
  .layout-navbar .navbar-nav .nav-item.dropdown .dropdown-menu {
    position: absolute;
    left: 0.9rem;
    min-width: auto;
    width: 92%;
  }
}

@media (max-width: 1199.98px) {
  .layout-navbar {
    z-index: 1080;
  }
}
.layout-menu {
  position: relative;
  flex: 1 0 auto;
}
.layout-menu a:focus-visible {
  outline: none;
}
.layout-menu .menu {
  transform: translate3d(0, 0, 0);
}
.layout-menu .menu-vertical {
  height: 100%;
}

.layout-content-navbar .layout-page {
  flex-basis: 100%;
  flex-direction: column;
  width: 0;
  min-width: 0;
  max-width: 100%;
}
.layout-content-navbar .content-wrapper {
  width: 100%;
}

@media (min-width: 1200px) {
  .layout-menu-fixed .layout-menu,
  .layout-menu-fixed-offcanvas .layout-menu {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .layout-menu-fixed:not(.layout-menu-collapsed) .layout-page,
  .layout-menu-fixed-offcanvas:not(.layout-menu-collapsed) .layout-page {
    padding-left: 16.25rem;
  }
}
html:not(.layout-navbar-fixed):not(.layout-menu-fixed):not(.layout-menu-fixed-offcanvas) .layout-page,
html:not(.layout-navbar-fixed) .layout-content-navbar .layout-page {
  padding-top: 0 !important;
}

html:not(.layout-footer-fixed) .content-wrapper {
  padding-bottom: 0 !important;
}

@media (max-width: 1199.98px) {
  .layout-menu-fixed .layout-wrapper.layout-navbar-full .layout-menu,
  .layout-menu-fixed-offcanvas .layout-wrapper.layout-navbar-full .layout-menu {
    top: 0 !important;
  }
  html:not(.layout-navbar-fixed) .layout-navbar-full .layout-page {
    padding-top: 0 !important;
  }
}
.layout-navbar-fixed .layout-navbar {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
}

@media (min-width: 1200px) {
  .layout-menu-fixed .layout-navbar-full .layout-navbar,
  .layout-menu-fixed-offcanvas .layout-navbar-full .layout-navbar {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
  }
  .layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar,
  .layout-menu-fixed.layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar,
  .layout-menu-fixed-offcanvas.layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar {
    left: 16.25rem;
  }
}
.layout-footer-fixed .content-footer {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
}

@media (min-width: 1200px) {
  .layout-footer-fixed:not(.layout-menu-collapsed) .layout-wrapper:not(.layout-without-menu) .content-footer {
    left: 16.25rem;
  }
}
@media (max-width: 1199.98px) {
  .layout-menu {
    position: fixed !important;
    top: 0 !important;
    height: 100% !important;
    left: 0 !important;
    margin-right: 0 !important;
    margin-left: 0 !important;
    transform: translate3d(-100%, 0, 0);
    will-change: transform, -webkit-transform;
  }
  .layout-menu-expanded .layout-menu {
    transform: translate3d(0, 0, 0) !important;
  }
  .layout-menu-expanded body {
    overflow: hidden;
  }
  .layout-overlay {
    position: fixed;
    top: 0;
    right: 0;
    height: 100% !important;
    left: 0;
    display: none;
    background: #435971;
    opacity: 0.5;
    cursor: pointer;
  }
  .layout-menu-expanded .layout-overlay {
    display: block;
  }
  .layout-menu-100vh .layout-menu,
  .layout-menu-100vh .layout-overlay {
    height: 100vh !important;
  }
}
.layout-navbar-fixed body:not(.modal-open) .layout-navbar-full .layout-navbar,
.layout-menu-fixed body:not(.modal-open) .layout-navbar-full .layout-navbar,
.layout-menu-fixed-offcanvas body:not(.modal-open) .layout-navbar-full .layout-navbar {
  z-index: 1080;
}
.layout-navbar-fixed body:not(.modal-open) .layout-content-navbar .layout-navbar,
.layout-menu-fixed body:not(.modal-open) .layout-content-navbar .layout-navbar,
.layout-menu-fixed-offcanvas body:not(.modal-open) .layout-content-navbar .layout-navbar {
  z-index: 1075;
}

.layout-footer-fixed .content-footer {
  z-index: 1030;
}

@media (max-width: 1199.98px) {
  .layout-menu {
    z-index: 1100;
  }
  .layout-overlay {
    z-index: 1099;
  }
}
@media (min-width: 1200px) {
  .layout-navbar-full .layout-navbar {
    z-index: 10;
  }
  .layout-navbar-full .layout-menu {
    z-index: 9;
  }
  .layout-content-navbar .layout-navbar {
    z-index: 9;
  }
  .layout-content-navbar .layout-menu {
    z-index: 10;
  }
  .layout-menu-fixed body:not(.modal-open) .layout-navbar-full .layout-menu,
  .layout-menu-fixed-offcanvas body:not(.modal-open) .layout-navbar-full .layout-menu {
    z-index: 1075;
  }
  .layout-navbar-fixed body:not(.modal-open) .layout-content-navbar .layout-menu,
  .layout-menu-fixed body:not(.modal-open) .layout-content-navbar .layout-menu,
  .layout-menu-fixed-offcanvas body:not(.modal-open) .layout-content-navbar .layout-menu {
    z-index: 1080;
  }
}
.layout-menu-link-no-transition .layout-menu .menu-link,
.layout-menu-link-no-transition .layout-menu-horizontal .menu-link {
  transition: none !important;
  animation: none !important;
}

.layout-no-transition .layout-menu, .layout-no-transition .layout-menu .menu, .layout-no-transition .layout-menu .menu-item,
.layout-no-transition .layout-menu-horizontal,
.layout-no-transition .layout-menu-horizontal .menu,
.layout-no-transition .layout-menu-horizontal .menu-item {
  transition: none !important;
  animation: none !important;
}

@media (max-width: 1199.98px) {
  .layout-transitioning .layout-overlay {
    animation: menuAnimation 0.3s;
  }
  .layout-transitioning .layout-menu {
    transition-duration: 0.3s;
    transition-property: transform, -webkit-transform;
  }
}
@media (min-width: 1200px) {
  .layout-menu-collapsed:not(.layout-transitioning):not(.layout-menu-offcanvas):not(.layout-menu-fixed):not(.layout-menu-fixed-offcanvas) .layout-menu {
    transition-duration: 0.3s;
    transition-property: margin-left, margin-right, width;
  }
  .layout-transitioning.layout-menu-offcanvas .layout-menu {
    transition-duration: 0.3s;
    transition-property: margin-left, margin-right, transform, -webkit-transform;
  }
  .layout-transitioning.layout-menu-fixed .layout-page, .layout-transitioning.layout-menu-fixed-offcanvas .layout-page {
    transition-duration: 0.3s;
    transition-property: padding-left, padding-right;
  }
  .layout-transitioning.layout-menu-fixed .layout-menu {
    transition: width 0.3s;
  }
  .layout-transitioning.layout-menu-fixed-offcanvas .layout-menu {
    transition-duration: 0.3s;
    transition-property: transform, -webkit-transform;
  }
  .layout-transitioning.layout-navbar-fixed .layout-content-navbar .layout-navbar, .layout-transitioning.layout-footer-fixed .content-footer {
    transition-duration: 0.3s;
    transition-property: left, right;
  }
  .layout-transitioning:not(.layout-menu-offcanvas):not(.layout-menu-fixed):not(.layout-menu-fixed-offcanvas) .layout-menu {
    transition-duration: 0.3s;
    transition-property: margin-left, margin-right, width;
  }
}
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .menu,
  .layout-menu,
  .layout-page,
  .layout-navbar,
  .content-footer {
    transition: none !important;
    transition-duration: 0s !important;
  }
  .layout-overlay {
    animation: none !important;
  }
}
@-webkit-keyframes menuAnimation {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 0.5;
  }
}
@-moz-keyframes menuAnimation {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 0.5;
  }
}
@keyframes menuAnimation {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 0.5;
  }
}
.app-brand {
  display: flex;
  flex-grow: 0;
  flex-shrink: 0;
  overflow: hidden;
  line-height: 1;
  min-height: 1px;
  align-items: center;
}

.app-brand-link {
  display: flex;
  align-items: center;
}

.app-brand-logo {
  display: block;
  flex-grow: 0;
  flex-shrink: 0;
  overflow: hidden;
  min-height: 1px;
}
.app-brand-logo img,
.app-brand-logo svg {
  display: block;
}

.app-brand-text {
  flex-shrink: 0;
  opacity: 1;
  transition: opacity 0.15s ease-in-out;
}

.app-brand-img-collapsed {
  display: none;
}

.menu-vertical .app-brand {
  padding-right: 2rem;
  padding-left: 2rem;
}

.menu-horizontal .app-brand,
.menu-horizontal .app-brand + .menu-divider {
  display: none !important;
}

:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand {
  width: 5.25rem;
}
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-logo,
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-link,
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-text {
  margin-right: auto;
  margin-left: auto;
}
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-logo ~ .app-brand-text {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  opacity: 0;
}
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand .layout-menu-toggle {
  opacity: 0;
  left: calc(5.25rem - 1.5rem);
}
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-img {
  display: none;
}
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-img-collapsed {
  display: block;
}

@media (min-width: 1200px) {
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand {
    width: 5.25rem;
  }
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-logo,
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-link,
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-text {
    margin-right: auto;
    margin-left: auto;
  }
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-logo ~ .app-brand-text {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    opacity: 0;
  }
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand .layout-menu-toggle {
    opacity: 0;
    left: calc(5.25rem - 1.5rem);
  }
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-img {
    display: none;
  }
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-img-collapsed {
    display: block;
  }
}
.avatar {
  position: relative;
  width: 2.375rem;
  height: 2.375rem;
  cursor: pointer;
}
.avatar img {
  width: 100%;
  height: 100%;
}
.avatar .avatar-initial {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  text-transform: uppercase;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  background-color: #8592a3;
  font-weight: 500;
}
.avatar.avatar-online:after, .avatar.avatar-offline:after, .avatar.avatar-away:after, .avatar.avatar-busy:after {
  content: "";
  position: absolute;
  bottom: 0;
  right: 3px;
  width: 8px;
  height: 8px;
  border-radius: 100%;
  box-shadow: 0 0 0 2px #fff;
}
.avatar.avatar-online:after {
  background-color: #71dd37;
}
.avatar.avatar-offline:after {
  background-color: #8592a3;
}
.avatar.avatar-away:after {
  background-color: #ffab00;
}
.avatar.avatar-busy:after {
  background-color: #ff3e1d;
}

.pull-up {
  transition: all 0.25s ease;
}
.pull-up:hover {
  transform: translateY(-4px) scale(1.02);
  box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
  z-index: 30;
  border-radius: 50%;
}

.avatar-xs {
  width: 1.625rem;
  height: 1.625rem;
}
.avatar-xs .avatar-initial {
  font-size: 0.625rem;
}
.avatar-xs.avatar-online:after, .avatar-xs.avatar-offline:after, .avatar-xs.avatar-away:after, .avatar-xs.avatar-busy:after {
  width: 0.325rem;
  height: 0.325rem;
  right: 1px;
}

.avatar-sm {
  width: 2rem;
  height: 2rem;
}
.avatar-sm .avatar-initial {
  font-size: 0.75rem;
}
.avatar-sm.avatar-online:after, .avatar-sm.avatar-offline:after, .avatar-sm.avatar-away:after, .avatar-sm.avatar-busy:after {
  width: 0.4rem;
  height: 0.4rem;
  right: 2px;
}

.avatar-md {
  width: 3rem;
  height: 3rem;
}
.avatar-md .avatar-initial {
  font-size: 1.125rem;
}
.avatar-md.avatar-online:after, .avatar-md.avatar-offline:after, .avatar-md.avatar-away:after, .avatar-md.avatar-busy:after {
  width: 0.6rem;
  height: 0.6rem;
  right: 4px;
}

.avatar-lg {
  width: 4rem;
  height: 4rem;
}
.avatar-lg .avatar-initial {
  font-size: 1.5rem;
}
.avatar-lg.avatar-online:after, .avatar-lg.avatar-offline:after, .avatar-lg.avatar-away:after, .avatar-lg.avatar-busy:after {
  width: 0.8rem;
  height: 0.8rem;
  right: 5px;
}

.avatar-xl {
  width: 4.5rem;
  height: 4.5rem;
}
.avatar-xl .avatar-initial {
  font-size: 1.875rem;
}
.avatar-xl.avatar-online:after, .avatar-xl.avatar-offline:after, .avatar-xl.avatar-away:after, .avatar-xl.avatar-busy:after {
  width: 0.9rem;
  height: 0.9rem;
  right: 6px;
}

.avatar-group .avatar {
  transition: all 0.25s ease;
}
.avatar-group .avatar img,
.avatar-group .avatar .avatar-initial {
  border: 2px solid #fff;
}
.avatar-group .avatar .avatar-initial {
  background-color: #9da8b5;
}
.avatar-group .avatar:hover {
  z-index: 30;
  transition: all 0.25s ease;
}
.avatar-group .avatar {
  margin-left: -0.8rem;
}
.avatar-group .avatar:first-child {
  margin-left: 0;
}
.avatar-group .avatar-xs {
  margin-left: -0.65rem;
}
.avatar-group .avatar-sm {
  margin-left: -0.75rem;
}
.avatar-group .avatar-md {
  margin-left: -0.9rem;
}
.avatar-group .avatar-lg {
  margin-left: -1.5rem;
}
.avatar-group .avatar-xl {
  margin-left: -1.75rem;
}

.divider {
  display: block;
  text-align: center;
  margin: 1rem 0;
  overflow: hidden;
  white-space: nowrap;
}
.divider .divider-text {
  position: relative;
  display: inline-block;
  font-size: 0.8rem;
  padding: 0rem 1rem;
}
.divider .divider-text i {
  font-size: 1rem;
}
.divider .divider-text:before, .divider .divider-text:after {
  content: "";
  position: absolute;
  top: 50%;
  width: 100vw;
  border-top: 1px solid rgba(67, 89, 113, 0.2);
}
.divider .divider-text:before {
  right: 100%;
}
.divider .divider-text:after {
  left: 100%;
}
.divider.text-start .divider-text {
  padding-left: 0;
}
.divider.text-end .divider-text {
  padding-right: 0;
}
.divider.text-start-center .divider-text {
  left: -25%;
}
.divider.text-end-center .divider-text {
  right: -25%;
}
.divider.divider-dotted .divider-text:before, .divider.divider-dotted .divider-text:after {
  border-style: dotted;
  border-width: 0 1px 1px;
  border-color: rgba(67, 89, 113, 0.2);
}
.divider.divider-dashed .divider-text:before, .divider.divider-dashed .divider-text:after {
  border-style: dashed;
  border-width: 0 1px 1px;
  border-color: rgba(67, 89, 113, 0.2);
}

.divider.divider.divider-secondary .divider-text:before, .divider.divider.divider-secondary .divider-text:after {
  border-color: #8592a3;
}

.divider.divider.divider-success .divider-text:before, .divider.divider.divider-success .divider-text:after {
  border-color: #71dd37;
}

.divider.divider.divider-info .divider-text:before, .divider.divider.divider-info .divider-text:after {
  border-color: #03c3ec;
}

.divider.divider.divider-warning .divider-text:before, .divider.divider.divider-warning .divider-text:after {
  border-color: #ffab00;
}

.divider.divider.divider-danger .divider-text:before, .divider.divider.divider-danger .divider-text:after {
  border-color: #ff3e1d;
}

.divider.divider.divider-dark .divider-text:before, .divider.divider.divider-dark .divider-text:after {
  border-color: #233446;
}

.divider.divider.divider-gray .divider-text:before, .divider.divider.divider-gray .divider-text:after {
  border-color: rgba(67, 89, 113, 0.1);
}

.footer-link {
  display: inline-block;
}

.footer-light {
  color: rgba(67, 89, 113, 0.5);
}
.footer-light .footer-text {
  color: #697a8d;
}
.footer-light .footer-link {
  color: rgba(67, 89, 113, 0.5);
}
.footer-light .footer-link:hover, .footer-light .footer-link:focus {
  color: #697a8d;
}
.footer-light .footer-link.disabled {
  color: rgba(67, 89, 113, 0.3) !important;
}
.footer-light .show > .footer-link,
.footer-light .active > .footer-link,
.footer-light .footer-link.show,
.footer-light .footer-link.active {
  color: #697a8d;
}
.footer-light hr {
  border-color: rgba(0, 0, 0, 0.06);
}

.navbar.bg-secondary {
  background-color: #8592a3 !important;
  color: #eaecef;
}
.navbar.bg-secondary .navbar-brand,
.navbar.bg-secondary .navbar-brand a {
  color: #fff;
}
.navbar.bg-secondary .navbar-brand:hover, .navbar.bg-secondary .navbar-brand:focus,
.navbar.bg-secondary .navbar-brand a:hover,
.navbar.bg-secondary .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-secondary .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-secondary .navbar-search-wrapper .search-input {
  color: #eaecef;
}
.navbar.bg-secondary .search-input-wrapper .search-input,
.navbar.bg-secondary .search-input-wrapper .search-toggler {
  background-color: #8592a3 !important;
  color: #eaecef;
}
.navbar.bg-secondary .navbar-nav > .nav-link,
.navbar.bg-secondary .navbar-nav > .nav-item > .nav-link,
.navbar.bg-secondary .navbar-nav > .nav > .nav-item > .nav-link {
  color: #eaecef;
}
.navbar.bg-secondary .navbar-nav > .nav-link:hover, .navbar.bg-secondary .navbar-nav > .nav-link:focus,
.navbar.bg-secondary .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-secondary .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-secondary .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-secondary .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-secondary .navbar-nav > .nav-link.disabled,
.navbar.bg-secondary .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-secondary .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #c2c8d1 !important;
}
.navbar.bg-secondary .navbar-nav .show > .nav-link,
.navbar.bg-secondary .navbar-nav .active > .nav-link,
.navbar.bg-secondary .navbar-nav .nav-link.show,
.navbar.bg-secondary .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-secondary .navbar-toggler {
  color: #eaecef;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-secondary .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12)-Navbar' transform='translate(-1174.000000, -1290.000000)'%3E%3Cg id='Group' transform='translate(1174.000000, 1288.000000)'%3E%3Cg id='Icon-Color' transform='translate(0.000000, 2.000000)'%3E%3Cuse fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.navbar.bg-secondary .navbar-text {
  color: #eaecef;
}
.navbar.bg-secondary .navbar-text a {
  color: #fff;
}
.navbar.bg-secondary .navbar-text a:hover, .navbar.bg-secondary .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-secondary hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.navbar.bg-success {
  background-color: #71dd37 !important;
  color: #ecfae4;
}
.navbar.bg-success .navbar-brand,
.navbar.bg-success .navbar-brand a {
  color: #fff;
}
.navbar.bg-success .navbar-brand:hover, .navbar.bg-success .navbar-brand:focus,
.navbar.bg-success .navbar-brand a:hover,
.navbar.bg-success .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-success .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-success .navbar-search-wrapper .search-input {
  color: #ecfae4;
}
.navbar.bg-success .search-input-wrapper .search-input,
.navbar.bg-success .search-input-wrapper .search-toggler {
  background-color: #71dd37 !important;
  color: #ecfae4;
}
.navbar.bg-success .navbar-nav > .nav-link,
.navbar.bg-success .navbar-nav > .nav-item > .nav-link,
.navbar.bg-success .navbar-nav > .nav > .nav-item > .nav-link {
  color: #ecfae4;
}
.navbar.bg-success .navbar-nav > .nav-link:hover, .navbar.bg-success .navbar-nav > .nav-link:focus,
.navbar.bg-success .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-success .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-success .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-success .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-success .navbar-nav > .nav-link.disabled,
.navbar.bg-success .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-success .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #bbee9f !important;
}
.navbar.bg-success .navbar-nav .show > .nav-link,
.navbar.bg-success .navbar-nav .active > .nav-link,
.navbar.bg-success .navbar-nav .nav-link.show,
.navbar.bg-success .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-success .navbar-toggler {
  color: #ecfae4;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-success .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12)-Navbar' transform='translate(-1174.000000, -1290.000000)'%3E%3Cg id='Group' transform='translate(1174.000000, 1288.000000)'%3E%3Cg id='Icon-Color' transform='translate(0.000000, 2.000000)'%3E%3Cuse fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.navbar.bg-success .navbar-text {
  color: #ecfae4;
}
.navbar.bg-success .navbar-text a {
  color: #fff;
}
.navbar.bg-success .navbar-text a:hover, .navbar.bg-success .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-success hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.navbar.bg-info {
  background-color: #03c3ec !important;
  color: #d2f4fc;
}
.navbar.bg-info .navbar-brand,
.navbar.bg-info .navbar-brand a {
  color: #fff;
}
.navbar.bg-info .navbar-brand:hover, .navbar.bg-info .navbar-brand:focus,
.navbar.bg-info .navbar-brand a:hover,
.navbar.bg-info .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-info .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-info .navbar-search-wrapper .search-input {
  color: #d2f4fc;
}
.navbar.bg-info .search-input-wrapper .search-input,
.navbar.bg-info .search-input-wrapper .search-toggler {
  background-color: #03c3ec !important;
  color: #d2f4fc;
}
.navbar.bg-info .navbar-nav > .nav-link,
.navbar.bg-info .navbar-nav > .nav-item > .nav-link,
.navbar.bg-info .navbar-nav > .nav > .nav-item > .nav-link {
  color: #d2f4fc;
}
.navbar.bg-info .navbar-nav > .nav-link:hover, .navbar.bg-info .navbar-nav > .nav-link:focus,
.navbar.bg-info .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-info .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-info .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-info .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-info .navbar-nav > .nav-link.disabled,
.navbar.bg-info .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-info .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #7fe0f6 !important;
}
.navbar.bg-info .navbar-nav .show > .nav-link,
.navbar.bg-info .navbar-nav .active > .nav-link,
.navbar.bg-info .navbar-nav .nav-link.show,
.navbar.bg-info .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-info .navbar-toggler {
  color: #d2f4fc;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-info .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12)-Navbar' transform='translate(-1174.000000, -1290.000000)'%3E%3Cg id='Group' transform='translate(1174.000000, 1288.000000)'%3E%3Cg id='Icon-Color' transform='translate(0.000000, 2.000000)'%3E%3Cuse fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.navbar.bg-info .navbar-text {
  color: #d2f4fc;
}
.navbar.bg-info .navbar-text a {
  color: #fff;
}
.navbar.bg-info .navbar-text a:hover, .navbar.bg-info .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-info hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.navbar.bg-warning {
  background-color: #ffab00 !important;
  color: #fff5e0;
}
.navbar.bg-warning .navbar-brand,
.navbar.bg-warning .navbar-brand a {
  color: #fff;
}
.navbar.bg-warning .navbar-brand:hover, .navbar.bg-warning .navbar-brand:focus,
.navbar.bg-warning .navbar-brand a:hover,
.navbar.bg-warning .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-warning .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-warning .navbar-search-wrapper .search-input {
  color: #fff5e0;
}
.navbar.bg-warning .search-input-wrapper .search-input,
.navbar.bg-warning .search-input-wrapper .search-toggler {
  background-color: #ffab00 !important;
  color: #fff5e0;
}
.navbar.bg-warning .navbar-nav > .nav-link,
.navbar.bg-warning .navbar-nav > .nav-item > .nav-link,
.navbar.bg-warning .navbar-nav > .nav > .nav-item > .nav-link {
  color: #fff5e0;
}
.navbar.bg-warning .navbar-nav > .nav-link:hover, .navbar.bg-warning .navbar-nav > .nav-link:focus,
.navbar.bg-warning .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-warning .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-warning .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-warning .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-warning .navbar-nav > .nav-link.disabled,
.navbar.bg-warning .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-warning .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #ffd786 !important;
}
.navbar.bg-warning .navbar-nav .show > .nav-link,
.navbar.bg-warning .navbar-nav .active > .nav-link,
.navbar.bg-warning .navbar-nav .nav-link.show,
.navbar.bg-warning .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-warning .navbar-toggler {
  color: #fff5e0;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-warning .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12)-Navbar' transform='translate(-1174.000000, -1290.000000)'%3E%3Cg id='Group' transform='translate(1174.000000, 1288.000000)'%3E%3Cg id='Icon-Color' transform='translate(0.000000, 2.000000)'%3E%3Cuse fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.navbar.bg-warning .navbar-text {
  color: #fff5e0;
}
.navbar.bg-warning .navbar-text a {
  color: #fff;
}
.navbar.bg-warning .navbar-text a:hover, .navbar.bg-warning .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-warning hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.navbar.bg-danger {
  background-color: #ff3e1d !important;
  color: #ffd5ce;
}
.navbar.bg-danger .navbar-brand,
.navbar.bg-danger .navbar-brand a {
  color: #fff;
}
.navbar.bg-danger .navbar-brand:hover, .navbar.bg-danger .navbar-brand:focus,
.navbar.bg-danger .navbar-brand a:hover,
.navbar.bg-danger .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-danger .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-danger .navbar-search-wrapper .search-input {
  color: #ffd5ce;
}
.navbar.bg-danger .search-input-wrapper .search-input,
.navbar.bg-danger .search-input-wrapper .search-toggler {
  background-color: #ff3e1d !important;
  color: #ffd5ce;
}
.navbar.bg-danger .navbar-nav > .nav-link,
.navbar.bg-danger .navbar-nav > .nav-item > .nav-link,
.navbar.bg-danger .navbar-nav > .nav > .nav-item > .nav-link {
  color: #ffd5ce;
}
.navbar.bg-danger .navbar-nav > .nav-link:hover, .navbar.bg-danger .navbar-nav > .nav-link:focus,
.navbar.bg-danger .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-danger .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-danger .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-danger .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-danger .navbar-nav > .nav-link.disabled,
.navbar.bg-danger .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-danger .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #ff9987 !important;
}
.navbar.bg-danger .navbar-nav .show > .nav-link,
.navbar.bg-danger .navbar-nav .active > .nav-link,
.navbar.bg-danger .navbar-nav .nav-link.show,
.navbar.bg-danger .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-danger .navbar-toggler {
  color: #ffd5ce;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-danger .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12)-Navbar' transform='translate(-1174.000000, -1290.000000)'%3E%3Cg id='Group' transform='translate(1174.000000, 1288.000000)'%3E%3Cg id='Icon-Color' transform='translate(0.000000, 2.000000)'%3E%3Cuse fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.navbar.bg-danger .navbar-text {
  color: #ffd5ce;
}
.navbar.bg-danger .navbar-text a {
  color: #fff;
}
.navbar.bg-danger .navbar-text a:hover, .navbar.bg-danger .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-danger hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.navbar.bg-dark {
  background-color: #233446 !important;
  color: #e4e6e8;
}
.navbar.bg-dark .navbar-brand,
.navbar.bg-dark .navbar-brand a {
  color: #fff;
}
.navbar.bg-dark .navbar-brand:hover, .navbar.bg-dark .navbar-brand:focus,
.navbar.bg-dark .navbar-brand a:hover,
.navbar.bg-dark .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-dark .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-dark .navbar-search-wrapper .search-input {
  color: #e4e6e8;
}
.navbar.bg-dark .search-input-wrapper .search-input,
.navbar.bg-dark .search-input-wrapper .search-toggler {
  background-color: #233446 !important;
  color: #e4e6e8;
}
.navbar.bg-dark .navbar-nav > .nav-link,
.navbar.bg-dark .navbar-nav > .nav-item > .nav-link,
.navbar.bg-dark .navbar-nav > .nav > .nav-item > .nav-link {
  color: #e4e6e8;
}
.navbar.bg-dark .navbar-nav > .nav-link:hover, .navbar.bg-dark .navbar-nav > .nav-link:focus,
.navbar.bg-dark .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-dark .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-dark .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-dark .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-dark .navbar-nav > .nav-link.disabled,
.navbar.bg-dark .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-dark .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #979fa7 !important;
}
.navbar.bg-dark .navbar-nav .show > .nav-link,
.navbar.bg-dark .navbar-nav .active > .nav-link,
.navbar.bg-dark .navbar-nav .nav-link.show,
.navbar.bg-dark .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-dark .navbar-toggler {
  color: #e4e6e8;
  border-color: rgba(255, 255, 255, 0.06);
}
.navbar.bg-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12)-Navbar' transform='translate(-1174.000000, -1290.000000)'%3E%3Cg id='Group' transform='translate(1174.000000, 1288.000000)'%3E%3Cg id='Icon-Color' transform='translate(0.000000, 2.000000)'%3E%3Cuse fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba(255, 255, 255, 0.8)' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.navbar.bg-dark .navbar-text {
  color: #e4e6e8;
}
.navbar.bg-dark .navbar-text a {
  color: #fff;
}
.navbar.bg-dark .navbar-text a:hover, .navbar.bg-dark .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-dark hr {
  border-color: rgba(255, 255, 255, 0.06);
}

.navbar.bg-gray {
  background-color: #eceef1 !important;
  color: #8291a1;
}
.navbar.bg-gray .navbar-brand,
.navbar.bg-gray .navbar-brand a {
  color: #435971;
}
.navbar.bg-gray .navbar-brand:hover, .navbar.bg-gray .navbar-brand:focus,
.navbar.bg-gray .navbar-brand a:hover,
.navbar.bg-gray .navbar-brand a:focus {
  color: #435971;
}
.navbar.bg-gray .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-gray .navbar-search-wrapper .search-input {
  color: #8291a1;
}
.navbar.bg-gray .search-input-wrapper .search-input,
.navbar.bg-gray .search-input-wrapper .search-toggler {
  background-color: rgba(67, 89, 113, 0.1) !important;
  color: #8291a1;
}
.navbar.bg-gray .navbar-nav > .nav-link,
.navbar.bg-gray .navbar-nav > .nav-item > .nav-link,
.navbar.bg-gray .navbar-nav > .nav > .nav-item > .nav-link {
  color: #8291a1;
}
.navbar.bg-gray .navbar-nav > .nav-link:hover, .navbar.bg-gray .navbar-nav > .nav-link:focus,
.navbar.bg-gray .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-gray .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-gray .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-gray .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #435971;
}
.navbar.bg-gray .navbar-nav > .nav-link.disabled,
.navbar.bg-gray .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-gray .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #acb6c1 !important;
}
.navbar.bg-gray .navbar-nav .show > .nav-link,
.navbar.bg-gray .navbar-nav .active > .nav-link,
.navbar.bg-gray .navbar-nav .nav-link.show,
.navbar.bg-gray .navbar-nav .nav-link.active {
  color: #435971;
}
.navbar.bg-gray .navbar-toggler {
  color: #8291a1;
  border-color: rgba(67, 89, 113, 0.0783835294);
}
.navbar.bg-gray .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12)-Navbar' transform='translate(-1174.000000, -1290.000000)'%3E%3Cg id='Group' transform='translate(1174.000000, 1288.000000)'%3E%3Cg id='Icon-Color' transform='translate(0.000000, 2.000000)'%3E%3Cuse fill='rgba(67, 89, 113, 0.5)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba(67, 89, 113, 0.5)' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.navbar.bg-gray .navbar-text {
  color: #8291a1;
}
.navbar.bg-gray .navbar-text a {
  color: #435971;
}
.navbar.bg-gray .navbar-text a:hover, .navbar.bg-gray .navbar-text a:focus {
  color: #435971;
}
.navbar.bg-gray hr {
  border-color: rgba(67, 89, 113, 0.0783835294);
}

.navbar.bg-white {
  background-color: #fff !important;
  color: #a1acb8;
}
.navbar.bg-white .navbar-brand,
.navbar.bg-white .navbar-brand a {
  color: #697a8d;
}
.navbar.bg-white .navbar-brand:hover, .navbar.bg-white .navbar-brand:focus,
.navbar.bg-white .navbar-brand a:hover,
.navbar.bg-white .navbar-brand a:focus {
  color: #697a8d;
}
.navbar.bg-white .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-white .navbar-search-wrapper .search-input {
  color: #a1acb8;
}
.navbar.bg-white .search-input-wrapper .search-input,
.navbar.bg-white .search-input-wrapper .search-toggler {
  background-color: #fff !important;
  color: #a1acb8;
}
.navbar.bg-white .navbar-nav > .nav-link,
.navbar.bg-white .navbar-nav > .nav-item > .nav-link,
.navbar.bg-white .navbar-nav > .nav > .nav-item > .nav-link {
  color: #a1acb8;
}
.navbar.bg-white .navbar-nav > .nav-link:hover, .navbar.bg-white .navbar-nav > .nav-link:focus,
.navbar.bg-white .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-white .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-white .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-white .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #697a8d;
}
.navbar.bg-white .navbar-nav > .nav-link.disabled,
.navbar.bg-white .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-white .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #c7cdd4 !important;
}
.navbar.bg-white .navbar-nav .show > .nav-link,
.navbar.bg-white .navbar-nav .active > .nav-link,
.navbar.bg-white .navbar-nav .nav-link.show,
.navbar.bg-white .navbar-nav .nav-link.active {
  color: #697a8d;
}
.navbar.bg-white .navbar-toggler {
  color: #a1acb8;
  border-color: rgba(105, 122, 141, 0.075);
}
.navbar.bg-white .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12)-Navbar' transform='translate(-1174.000000, -1290.000000)'%3E%3Cg id='Group' transform='translate(1174.000000, 1288.000000)'%3E%3Cg id='Icon-Color' transform='translate(0.000000, 2.000000)'%3E%3Cuse fill='rgba(67, 89, 113, 0.5)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba(67, 89, 113, 0.5)' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.navbar.bg-white .navbar-text {
  color: #a1acb8;
}
.navbar.bg-white .navbar-text a {
  color: #697a8d;
}
.navbar.bg-white .navbar-text a:hover, .navbar.bg-white .navbar-text a:focus {
  color: #697a8d;
}
.navbar.bg-white hr {
  border-color: rgba(105, 122, 141, 0.075);
}

.navbar.bg-light {
  background-color: #eceef1 !important;
  color: #a1acb8;
}
.navbar.bg-light .navbar-brand,
.navbar.bg-light .navbar-brand a {
  color: #697a8d;
}
.navbar.bg-light .navbar-brand:hover, .navbar.bg-light .navbar-brand:focus,
.navbar.bg-light .navbar-brand a:hover,
.navbar.bg-light .navbar-brand a:focus {
  color: #697a8d;
}
.navbar.bg-light .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-light .navbar-search-wrapper .search-input {
  color: #a1acb8;
}
.navbar.bg-light .search-input-wrapper .search-input,
.navbar.bg-light .search-input-wrapper .search-toggler {
  background-color: rgba(67, 89, 113, 0.1) !important;
  color: #a1acb8;
}
.navbar.bg-light .navbar-nav > .nav-link,
.navbar.bg-light .navbar-nav > .nav-item > .nav-link,
.navbar.bg-light .navbar-nav > .nav > .nav-item > .nav-link {
  color: #a1acb8;
}
.navbar.bg-light .navbar-nav > .nav-link:hover, .navbar.bg-light .navbar-nav > .nav-link:focus,
.navbar.bg-light .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-light .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-light .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-light .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #697a8d;
}
.navbar.bg-light .navbar-nav > .nav-link.disabled,
.navbar.bg-light .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-light .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #bfc6cf !important;
}
.navbar.bg-light .navbar-nav .show > .nav-link,
.navbar.bg-light .navbar-nav .active > .nav-link,
.navbar.bg-light .navbar-nav .nav-link.show,
.navbar.bg-light .navbar-nav .nav-link.active {
  color: #697a8d;
}
.navbar.bg-light .navbar-toggler {
  color: #a1acb8;
  border-color: rgba(105, 122, 141, 0.0783835294);
}
.navbar.bg-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3Csvg width='14px' height='11px' viewBox='0 0 14 11' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3Cpath d='M0,0 L14,0 L14,1.75 L0,1.75 L0,0 Z M0,4.375 L14,4.375 L14,6.125 L0,6.125 L0,4.375 Z M0,8.75 L14,8.75 L14,10.5 L0,10.5 L0,8.75 Z' id='path-1'%3E%3C/path%3E%3C/defs%3E%3Cg id='💎-UI-Elements' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='12)-Navbar' transform='translate(-1174.000000, -1290.000000)'%3E%3Cg id='Group' transform='translate(1174.000000, 1288.000000)'%3E%3Cg id='Icon-Color' transform='translate(0.000000, 2.000000)'%3E%3Cuse fill='rgba(67, 89, 113, 0.5)' xlink:href='%23path-1'%3E%3C/use%3E%3Cuse fill-opacity='0.1' fill='rgba(67, 89, 113, 0.5)' xlink:href='%23path-1'%3E%3C/use%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.navbar.bg-light .navbar-text {
  color: #a1acb8;
}
.navbar.bg-light .navbar-text a {
  color: #697a8d;
}
.navbar.bg-light .navbar-text a:hover, .navbar.bg-light .navbar-text a:focus {
  color: #697a8d;
}
.navbar.bg-light hr {
  border-color: rgba(105, 122, 141, 0.0783835294);
}

.footer.bg-white {
  background-color: #fff !important;
  color: #a1acb8;
}
.footer.bg-white .footer-link {
  color: #a1acb8;
}
.footer.bg-white .footer-link:hover, .footer.bg-white .footer-link:focus {
  color: #697a8d;
}
.footer.bg-white .footer-link.disabled {
  color: #c7cdd4 !important;
}
.footer.bg-white .footer-text {
  color: #697a8d;
}
.footer.bg-white .show > .footer-link,
.footer.bg-white .active > .footer-link,
.footer.bg-white .footer-link.show,
.footer.bg-white .footer-link.active {
  color: #697a8d;
}
.footer.bg-white hr {
  border-color: rgba(105, 122, 141, 0.075);
}

.footer.bg-light {
  background-color: #eceef1 !important;
  color: #a1acb8;
}
.footer.bg-light .footer-link {
  color: #a1acb8;
}
.footer.bg-light .footer-link:hover, .footer.bg-light .footer-link:focus {
  color: #697a8d;
}
.footer.bg-light .footer-link.disabled {
  color: #bfc6cf !important;
}
.footer.bg-light .footer-text {
  color: #697a8d;
}
.footer.bg-light .show > .footer-link,
.footer.bg-light .active > .footer-link,
.footer.bg-light .footer-link.show,
.footer.bg-light .footer-link.active {
  color: #697a8d;
}
.footer.bg-light hr {
  border-color: rgba(105, 122, 141, 0.0783835294);
}

.form-control,
        .form-select,
        .input-group-text {
            border-radius: 0px !important;
            border: 1px solid transparent !important;
            border-bottom: 1px dotted #000 !important;
            background: transparent !important;
        }

        .form-select select::before,
        .form-select select::after {
            content: "" !important;
            position: absolute !important;
            pointer-events: none !important;
        }

        .title-invoice{
            font-family: 'Khmer Moul1' !important
        }
        .table > :not(caption) > * > * {
    padding: 0.4rem 1rem !important;
        }

        .table{
          border-color: #b8b8b8 !important;
        }

        .table:not(.table-dark) th {
    color: #000000 !important;
}
.border-bottom {
    border-bottom: 1px dotted #000 !important;
}
.table > :not(caption) > * > * {
    color: black !important;
    padding: 0.5rem 0rem !important;
    background-color: #fff !important;
    border-bottom-width: 0px;
}
    </style>
</head>

<body class="bg-light print-invoice mt-5 mb-5">
    <div class="container">

        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="title-invoice">{{ __('app.invoice') }}</h3>
                    @php
                    $parts = explode('/', $invoicePaid->invoice_date);
                @endphp
                    <p class="float-end">{{ __('app.label_day') }} {{ $parts[0] }}
                        {{ __('app.label_month') }} {{ $parts[1] }} {{ __('app.label_year') }}
                        {{ $parts[2] }}</p>
                </div>
            </div>
            <div class="row mt-5">
              <div class="col-sm-12">
                <table class="table table-info">
                  <tr>
                    <td>{{ __('app.room_number') }}</td>
                    <td colspan="4" class="border-bottom">{{ $room->room_number }}</td>
                    <td>{{ __('app.cost') }}</td>
                    <td class="text-end border-bottom">${{ floatval($invoicePaid->room_cost) }}</td>
                  </tr>
                  <tr>
                    <td>{{ __('app.eletrotic_cost') }}</td>
                    <td colspan="6" class="text-end border-bottom">{{ floatval($invoicePaid->electric_cost) }}៛</td>
                  </tr>
                  @if ($invoicePaid->water_cost != "0.00")
                  <tr>
                    <td>{{ __('app.water_cost') }}</td>
                    <td>{{ __('app.label_old_number') }}</td>
                    <td class="border-bottom">{{ $invoicePaid->water_old }}</td>
                    <td>{{ __('app.label_new_number') }}</td>
                    <td class="border-bottom">{{ $invoicePaid->water_new }}</td>
                    <td colspan="2" class="text-end border-bottom">{{ floatval($invoicePaid->water_cost) }}៛</td>
                  </tr>
                  @endif
                  <tr>
                    <td>{{ __('app.label_eletrotic_cost_with_trash') }}</td>
                    <td colspan="6" class="text-end border-bottom">{{ floatval($invoicePaid->electric_trash_cost) }}៛</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="row mt-2 justify-content-end">
                <div class="col-sm-12">
                    <label class="col-form-label" style="font-family: Siemreap;">{{ $invoicePaid->other }}</label>
                </div>
            </div>
            <div class="row mt-3 justify-content-end">
              <div class="col-sm-12 text-end float-end">
                  <label class="text-end" style="font-family: Siemreap;">{{ __('app.label_total_amount') }} 
                    <small class="me-2"></small><span class=" float-end">{{ $invoicePaid->total_amount }}</span>
                  </label>
                  <p class="text-end mt-2">{{ $invoicePaid->total_amount_dollar }}</p>
              </div>
            </div>

            <div class="row mt-3 mb-5">
                <div class="col-sm-12">
                    <h6 style="font-family: Siemreap;">{{ __('app.label_invoice_info') }}</h6>
                    <h6 style="font-family: Siemreap;">{{ __('app.label_invoice_info_2') }}</h6>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

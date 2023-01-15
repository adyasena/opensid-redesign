<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
  .three-body {
    --uib-size: 35px;
    --uib-speed: 0.8s;
    position: relative;
    display: inline-block;
    height: var(--uib-size);
    width: var(--uib-size);
    -webkit-animation: spin78236 calc(var(--uib-speed) * 2.5) infinite linear;
    animation: spin78236 calc(var(--uib-speed) * 2.5) infinite linear;
  }
  .three-body__dot {
    position: absolute;
    height: 100%;
    width: 30%;
  }
  .three-body__dot:after {
    content: '';
    position: absolute;
    height: 0%;
    width: 100%;
    padding-bottom: 100%;
    background-color: var(--primary-base-color);
    border-radius: 50%;
  }
  .three-body__dot:nth-child(1) {
    bottom: 5%;
    left: 0;
    -webkit-transform: rotate(60deg);
        -ms-transform: rotate(60deg);
            transform: rotate(60deg);
    -webkit-transform-origin: 50% 85%;
        -ms-transform-origin: 50% 85%;
            transform-origin: 50% 85%;
  }
  .three-body__dot:nth-child(1)::after {
    bottom: 0;
    left: 0;
    -webkit-animation: wobble1 var(--uib-speed) infinite ease-in-out;
            animation: wobble1 var(--uib-speed) infinite ease-in-out;
    -webkit-animation-delay: calc(var(--uib-speed) * -0.3);
            animation-delay: calc(var(--uib-speed) * -0.3);
  }
  .three-body__dot:nth-child(2) {
    bottom: 5%;
    right: 0;
    -webkit-transform: rotate(-60deg);
        -ms-transform: rotate(-60deg);
            transform: rotate(-60deg);
    -webkit-transform-origin: 50% 85%;
        -ms-transform-origin: 50% 85%;
            transform-origin: 50% 85%;
  }
  .three-body__dot:nth-child(2)::after {
  bottom: 0;
  left: 0;
  -webkit-animation: wobble1 var(--uib-speed) infinite
    calc(var(--uib-speed) * -0.15) ease-in-out;
          animation: wobble1 var(--uib-speed) infinite
    calc(var(--uib-speed) * -0.15) ease-in-out;
  }
  .three-body__dot:nth-child(3) {
    bottom: -5%;
    left: 0;
    -webkit-transform: translateX(116.666%);
        -ms-transform: translateX(116.666%);
            transform: translateX(116.666%);
  }
  .three-body__dot:nth-child(3)::after {
    top: 0;
    left: 0;
    -webkit-animation: wobble2 var(--uib-speed) infinite ease-in-out;
            animation: wobble2 var(--uib-speed) infinite ease-in-out;
  }
  @-webkit-keyframes spin78236 {
    0% {
      -webkit-transform: rotate(0deg);
              transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
              transform: rotate(360deg);
    }
  }
  @keyframes spin78236 {
    0% {
      -webkit-transform: rotate(0deg);
              transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(360deg);
              transform: rotate(360deg);
    }
  }
  @-webkit-keyframes wobble1 {
    0%,
    100% {
      -webkit-transform: translateY(0%) scale(1);
              transform: translateY(0%) scale(1);
      opacity: 1;
    }
    50% {
      -webkit-transform: translateY(-66%) scale(0.65);
              transform: translateY(-66%) scale(0.65);
      opacity: 0.8;
    }
  }
  @keyframes wobble1 {
    0%,
    100% {
      -webkit-transform: translateY(0%) scale(1);
              transform: translateY(0%) scale(1);
      opacity: 1;
    }
    50% {
      -webkit-transform: translateY(-66%) scale(0.65);
              transform: translateY(-66%) scale(0.65);
      opacity: 0.8;
    }
  }
  @-webkit-keyframes wobble2 {
    0%,
    100% {
      -webkit-transform: translateY(0%) scale(1);
              transform: translateY(0%) scale(1);
      opacity: 1;
    }
    50% {
      -webkit-transform: translateY(66%) scale(0.65);
              transform: translateY(66%) scale(0.65);
      opacity: 0.8;
    }
  }
  @keyframes wobble2 {
    0%,
    100% {
      -webkit-transform: translateY(0%) scale(1);
              transform: translateY(0%) scale(1);
      opacity: 1;
    }
    50% {
      -webkit-transform: translateY(66%) scale(0.65);
              transform: translateY(66%) scale(0.65);
      opacity: 0.8;
    }
  }
</style>

<div 
  x-data="{loading: true, onLoading() {setTimeout(() => {this.loading = false}, 200)}}"
  x-init="onLoading()">
  <div
    class="fixed bg-white left-0 top-0 w-screen h-screen flex justify-center items-center"
    x-show="loading"
    style="z-index: 100000;">
    <div class="three-body">
      <div class="three-body__dot"></div>
      <div class="three-body__dot"></div>
      <div class="three-body__dot"></div>
    </div>
  </div>
</div>
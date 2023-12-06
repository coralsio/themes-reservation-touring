<template>
  <form name="bookingForm" action=""
        v-if="ready"
        method="post"
        class="booking-form">
    <h3 class="inner">- {{ translations['booking'] }} -</h3>
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label><i class="icon-calendar-7"></i> {{ translations['select_date'] }}
          </label>

          <datepicker v-model="starts_at" :key="'start_at'"
                      :placeholder="'mm/dd/yyyy'"
                      :format="'MM/dd/yyyy'"
                      :disabled-dates="disabledStartsAtDate"
                      :input-class="'form-control vuejs-datepicker'">

          </datepicker>
          <!--          <input class=" form-control" name="starts_at" id="starts_at"-->
          <!--                 data-date-format="M d, D" type="text">-->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label> {{ translations['quantity'] }}
          </label>
          <div class="numbers-row">
            <input type="text" v-model="quantity" id="adults" class="qty2 form-control"
                   name="quantity">
            <div @click="addSubQuantity('add')" class="inc button_inc">+</div>
            <div @click="addSubQuantity('sub')" class="dec button_inc">-</div>
          </div>
        </div>
      </div>

    </div>
    <br>
    <table class="table table_summary">
      <tbody>

      <tr>
        <td>
          {{ translations['total_amount'] }}
        </td>
        <td class="text-right">
          {{ tourMainPrice }}
        </td>
      </tr>
      <tr class="total">
        <td>
          {{ translations['total_cost'] }}
        </td>
        <td class="text-right">
          {{ tourMainPrice }}
        </td>
      </tr>
      </tbody>
    </table>

    <button type="submit"
            @click.prevent="submit"
            class="btn_full">{{ translations['book_now'] }}
    </button>

  </form>
</template>

<script>
import Datepicker from 'vuejs-datepicker';

export default {
  name: "Booking",
  props: ['tourHashedId'],

  data() {

    return {
      starts_at: null,
      quantity: 1,
      translations: [],
      tourMainPrice: '',
      disableDates: [],
      ready: false,
      userCurrency: 'USD',
      pureCost: ''
    }
  },
  components: {
    Datepicker
  },
  mounted() {
    this.initComponent();
  },

  methods: {
    addSubQuantity(action) {

      if (action == 'add') {
        this.quantity++;
      } else if (action == 'sub') {
        if (this.quantity <= 1) {
          this.quantity = 1;
        } else {
          this.quantity--;
        }
      }
    },

    submit() {
      axios.post(`/checkout/${this.tourHashedId}/create-reservation`, {
        'starts_at': this.starts_at,
        'quantity': this.quantity
      }).then(({data}) => {

        if (data.action == "redirectTo") {
          redirectTo({url: data.url});
        }

      }).catch(({response}) => {
        themeNotify({
          level: 'error',
          message: response.data.message
        })
      });

    },
    initComponent() {
      axios.get(`tours/get-booking-component-data/${this.tourHashedId}`).then(({data}) => {
        this.translations = data.translations
        this.disableDates = data.disable_date
        this.userCurrency = data.user_currency
        this.pureCost = data.pure_cost;
        this.ready = true;

        this.tourMainPrice = this.money(this.pureCost);

        this.starts_at = this.getClosestWorkingDay();


      }).catch(({response}) => {
        themeNotify({
          level: 'error',
          message: response.data.message
        })
      });
    },
    money(value) {
      return new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: this.userCurrency,
        minimumFractionDigits: 2
      }).format(value);
    },
    getClosestWorkingDay() {
      let day = moment();

      while (true) {

        if (!this.disableDates.hasOwnProperty(day.day())) {
          return day.toDate();
        }

        day.add(1, 'day');
      }

    }
  },
  computed: {
    disabledStartsAtDate() {
      return {
        to: new Date(Date.now() - 8640000),
        customPredictor: date => {

          if (this.disableDates && this.disableDates.hasOwnProperty(date.getDay())) {
            return true;
          }

        }
      };
    },
  },
  watch: {
    quantity(value) {

      this.tourMainPrice = this.money(
          Number(this.pureCost) * value
      );

    }
  }
}
</script>

<style>

.booking-form header.sticky {
  -webkit-box-shadow: 0px 2px 10px -2px rgba(0, 0, 0, 0.41);
  -moz-box-shadow: 0px 2px 10px -2px rgba(0, 0, 0, 0.41);
  box-shadow: 0px 2px 10px -2px rgba(0, 0, 0, 0.41);
  background-color: unset !important;;
  padding-bottom: unset !important;;
}

.booking-form header {
  width: unset !important;
  position: unset !important;;
  left: unset !important;;
  top: unset !important;;
  z-index: unset !important;;
  padding: unset !important;;
}
</style>
<template>
  <div>
    <form @submit.prevent="submitHandler">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h5 class="text-capitalize">
            {{
              param_id
                ? `${setup.edit_page_title}`
                : `${setup.create_page_title}`
            }}
          </h5>
          <div>
            <router-link
              v-if="item.slug"
              class="btn btn-outline-info mr-2 btn-sm"
              :to="{
                name: `Details${setup.route_prefix}`,
                params: { id: item.slug },
              }"
            >
              {{ setup.details_page_title }}
            </router-link>
            <router-link
              class="btn btn-outline-warning btn-sm"
              :to="{ name: `All${setup.route_prefix}` }"
            >
              {{ setup.all_page_title }}
            </router-link>
          </div>
        </div>
        <div class="card-body card_body_fixed_height">
          <div class="row">
            <template
              v-for="(form_field, index) in form_fields"
              v-bind:key="index"
            >
              <common-input
                :label="form_field.label"
                :type="form_field.type"
                :name="form_field.name"
                :multiple="form_field.multiple"
                :value="form_field.value"
                :data_list="form_field.data_list"
                :is_visible="form_field.is_visible"
                :row_col_class="form_field.row_col_class"
              />
            </template>

            <!-- for facts_and_features list input start-->
            <div class="col-md-12 pt-3">
              <div
                class="d-flex justify-content-between align-items-center border-bottom pb-2"
              >
                <h5 class="m-0">Add facts and features</h5>
                <button
                  class="btn btn-sm btn-outline-success"
                  @click.prevent="add_row('facts_and_features')"
                >
                  Add row
                </button>
              </div>
              <div
                class="row align-items-center"
                v-for="(facts_and_features, index) in facts_and_features_data"
                :key="index"
              >
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="">icon</label>
                    <div class="mt-1 mb-3">
                      <select
                        class="form-control form-control-square mb-2"
                        :name="`facts_and_features[${index}][icon]`"
                        v-model="facts_and_features.icon"
                        :class="{
                          custom_error:
                            errors['facts_and_features'] &&
                            errors['facts_and_features'][index] &&
                            errors['facts_and_features'][index].icon,
                        }"
                      >
                        <option value="">-- select --</option>
                        <option
                          v-for="(icon, i) in icons"
                          :key="i"
                          :value="icon.class"
                        >
                          {{ icon.title }}
                        </option>
                      </select>
                      <div
                        v-if="
                          errors['facts_and_features'] &&
                          errors['facts_and_features'][index] &&
                          errors['facts_and_features'][index].icon
                        "
                        class="text-danger small"
                      >
                        {{ errors["facts_and_features"][index].icon }}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="">title</label>
                    <div class="mt-1 mb-3">
                      <input
                        class="form-control form-control-square mb-2"
                        type="text"
                        :name="`facts_and_features[${index}][title]`"
                        v-model="facts_and_features.title"
                        id="title"
                        :class="{
                          custom_error:
                            errors['facts_and_features'] &&
                            errors['facts_and_features'][index] &&
                            errors['facts_and_features'][index].title,
                        }"
                      />
                    </div>
                    <div
                      v-if="
                        errors['facts_and_features'] &&
                        errors['facts_and_features'][index] &&
                        errors['facts_and_features'][index].title
                      "
                      class="text-danger small"
                    >
                      {{ errors["facts_and_features"][index].title }}
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">description</label>
                    <div class="mt-1 mb-3">
                      <input
                        class="form-control form-control-square mb-2"
                        type="text"
                        :name="`facts_and_features[${index}][description]`"
                        v-model="facts_and_features.description"
                        id="description"
                        :class="{
                          custom_error:
                            errors['facts_and_features'] &&
                            errors['facts_and_features'][index] &&
                            errors['facts_and_features'][index].description,
                        }"
                      />
                    </div>
                    <div
                      v-if="
                        errors['facts_and_features'] &&
                        errors['facts_and_features'][index] &&
                        errors['facts_and_features'][index].description
                      "
                      class="text-danger small"
                    >
                      {{ errors["facts_and_features"][index].description }}
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-2 d-flex align-items-center justify-content-center"
                >
                  <button
                    class="btn btn-sm btn-outline-danger"
                    :style="{
                      width: '100%',
                      marginTop:
                        !errors['facts_and_features']?.[index]?.icon &&
                        !errors['facts_and_features']?.[index]?.title &&
                        !errors['facts_and_features']?.[index]?.description
                          ? '30px'
                          : '0',
                    }"
                    @click.prevent="delete_row('facts_and_features', index)"
                  >
                    delete <i class="fa-solid fa-trash"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- for amenities list input start-->
            <div class="col-md-12 pt-3">
              <div
                class="d-flex justify-content-between align-items-center border-bottom pb-2"
              >
                <h5 class="m-0">Add amenities</h5>
                <button
                  class="btn btn-sm btn-outline-success"
                  @click.prevent="add_row('amenities')"
                >
                  Add row
                </button>
              </div>
              <div
                class="row align-items-center"
                v-for="(amenities, index) in amenities_data"
                :key="index"
              >
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">title</label>
                    <div class="mt-1 mb-3">
                      <input
                        class="form-control form-control-square mb-2"
                        type="text"
                        :name="`amenities[${index}][title]`"
                        v-model="amenities.title"
                        id="title"
                        :class="{
                          custom_error:
                            errors['amenities'] &&
                            errors['amenities'][index] &&
                            errors['amenities'][index].title,
                        }"
                      />
                    </div>
                    <div
                      v-if="
                        errors['amenities'] &&
                        errors['amenities'][index] &&
                        errors['amenities'][index].title
                      "
                      class="text-danger small"
                    >
                      {{ errors["amenities"][index].title }}
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">available</label>
                    <div class="mt-1 mb-3">
                      <select
                        class="form-control form-control-square mb-2"
                        :name="`amenities[${index}][available]`"
                        v-model="amenities.available"
                        :class="{
                          custom_error:
                            errors['amenities'] &&
                            errors['amenities'][index] &&
                            errors['amenities'][index].available,
                        }"
                      >
                        <option :value="null">-- select --</option>
                        <option :value="true">available</option>
                        <option :value="false">not available</option>
                      </select>
                      <div
                        v-if="
                          errors['amenities'] &&
                          errors['amenities'][index] &&
                          errors['amenities'][index].available
                        "
                        class="text-danger small"
                      >
                        {{ errors["amenities"][index].icon }}
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-2 d-flex align-items-center justify-content-center"
                >
                  <button
                    class="btn btn-sm btn-outline-danger"
                    :style="{
                      width: '100%',
                      marginTop: !errors['amenities']?.[index]?.title
                        ? '30px'
                        : '0',
                    }"
                    @click.prevent="delete_row('amenities', index)"
                  >
                    delete <i class="fa-solid fa-trash"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- for floor_plan list input start-->
            <div class="col-md-12 pt-3">
              <div
                class="d-flex justify-content-between align-items-center border-bottom pb-2"
              >
                <h5 class="m-0">Add floor plan</h5>
                <button
                  class="btn btn-sm btn-outline-success"
                  @click.prevent="add_row('floor_plan')"
                >
                  Add row
                </button>
              </div>
              <div
                class="row align-items-center"
                v-for="(floor_plan, index) in floor_plan_data"
                :key="index"
              >
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="">floor_number</label>
                    <div class="mt-1 mb-3">
                      <select
                        class="form-control form-control-square mb-2"
                        :name="`floor_plan[${index}][floor_number]`"
                        v-model="floor_plan.floor_number"
                        :class="{
                          custom_error:
                            errors['floor_plan'] &&
                            errors['floor_plan'][index] &&
                            errors['floor_plan'][index].floor_number,
                        }"
                      >
                        <option :value="null">-- select --</option>
                        <option
                          v-for="(number_of_floor, i) in number_of_floors"
                          :key="i"
                          :value="number_of_floor.text"
                        >
                          {{ number_of_floor.number }}
                        </option>
                      </select>
                    </div>
                    <div
                      v-if="
                        errors['floor_plan'] &&
                        errors['floor_plan'][index] &&
                        errors['floor_plan'][index].floor_number
                      "
                      class="text-danger small"
                    >
                      {{ errors["floor_plan"][index].floor_number }}
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">description</label>
                    <div class="mt-1 mb-3">
                      <input
                        class="form-control form-control-square mb-2"
                        type="text"
                        :name="`floor_plan[${index}][description]`"
                        v-model="floor_plan.description"
                        id="description"
                        :class="{
                          custom_error:
                            errors['floor_plan'] &&
                            errors['floor_plan'][index] &&
                            errors['floor_plan'][index].description,
                        }"
                      />
                    </div>
                    <div
                      v-if="
                        errors['floor_plan'] &&
                        errors['floor_plan'][index] &&
                        errors['floor_plan'][index].description
                      "
                      class="text-danger small"
                    >
                      {{ errors["floor_plan"][index].description }}
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <div>
                      <label for="">image up</label>
                      <a
                        :href="floor_plan_data[index].image_preview"
                        data-lightbox="image-1"
                        data-title="My caption"
                      >
                        <img
                          class="image_preview"
                          v-if="floor_plan_data[index].image_preview"
                          :src="floor_plan_data[index].image_preview"
                        />
                      </a>
                    </div>

                    <div class="mt-1 mb-3">
                      <input
                        class="form-control form-control-square mb-2"
                        type="file"
                        @change="onImageChange($event, index)"
                        :name="`floor_plan[${index}][image]`"
                        id="image"
                        :class="{
                          custom_error:
                            errors['floor_plan'] &&
                            errors['floor_plan'][index] &&
                            errors['floor_plan'][index].image,
                        }"
                      />
                    </div>
                    <div
                      v-if="
                        errors['floor_plan'] &&
                        errors['floor_plan'][index] &&
                        errors['floor_plan'][index].image
                      "
                      class="text-danger small"
                    >
                      {{ errors["floor_plan"][index].image }}
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-2 d-flex align-items-center justify-content-center"
                >
                  <button
                    class="btn btn-sm btn-outline-danger"
                    :style="{
                      width: '100%',
                      marginTop: !errors['floor_plan']?.[index]?.title
                        ? '30px'
                        : '0',
                    }"
                    @click.prevent="delete_row('floor_plan', index)"
                  >
                    delete <i class="fa-solid fa-trash"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- for floor_plan_details list input start-->
            <div class="col-md-12 pt-3 mt-2">
              <div
                class="d-flex justify-content-between align-items-center border-bottom pb-2"
              >
                <h5 class="m-0">Add floor plan details</h5>
                <button
                  class="btn btn-sm btn-outline-success"
                  @click.prevent="add_row('floor_plan_details')"
                >
                  Add row
                </button>
              </div>
              <div
                class="row align-items-center"
                v-for="(floor_plan_details, index) in floor_plan_details_data"
                :key="index"
              >
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">title</label>
                    <div class="mt-1 mb-3">
                      <input
                        class="form-control form-control-square mb-2"
                        type="text"
                        :name="`floor_plan_details[${index}][title]`"
                        v-model="floor_plan_details.title"
                        id="title"
                        :class="{
                          custom_error:
                            errors['floor_plan_details'] &&
                            errors['floor_plan_details'][index] &&
                            errors['floor_plan_details'][index].title,
                        }"
                      />
                    </div>
                    <div
                      v-if="
                        errors['floor_plan_details'] &&
                        errors['floor_plan_details'][index] &&
                        errors['floor_plan_details'][index].title
                      "
                      class="text-danger small"
                    >
                      {{ errors["floor_plan_details"][index].title }}
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">description</label>
                    <div class="mt-1 mb-3">
                      <textarea
                        class="form-control form-control-square mb-2"
                        type="text"
                        :name="`floor_plan_details[${index}][description]`"
                        v-model="floor_plan_details.description"
                        id=""
                        :class="{
                          custom_error:
                            errors['floor_plan_details'] &&
                            errors['floor_plan_details'][index] &&
                            errors['floor_plan_details'][index].description,
                        }"
                      ></textarea>
                    </div>
                      <div
                        v-if="
                          errors['floor_plan_details'] &&
                          errors['floor_plan_details'][index] &&
                          errors['floor_plan_details'][index].description
                        "
                        class="text-danger small"
                      >
                        {{ errors["floor_plan_details"][index].description }}
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-2 d-flex align-items-center justify-content-center"
                >
                  <button
                    class="btn btn-sm btn-outline-danger"
                    :style="{
                      width: '100%',
                      marginTop:
                        !errors['floor_plan_details']?.[index]?.title &&
                        !errors['floor_plan_details']?.[index]?.description 
                          ? '30px'
                          : '0',
                    }"
                    @click.prevent="delete_row('floor_plan_details', index)"
                  >
                    delete <i class="fa-solid fa-trash"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-light btn-square px-5">
            <i class="icon-lock"></i>
            Submit
          </button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { store } from "../store";
import setup from "../setup";
import form_fields from "../setup/form_fields";

export default {
  data: () => ({
    setup,
    form_fields,
    param_id: null,

    //----------- for facts_and_features list input ----------

    facts_and_features_data_object: {
      icon: "",
      title: "",
      description: "",
    },
    facts_and_features_data: [
      {
        icon: "",
        title: "",
        description: "",
      },
    ],

    icons: [
      { class: "fa-thumbs-down", title: "Bad" }, // bad
      { class: "fa-bath", title: "Bath" }, // bath
      { class: "fa-parking", title: "Parking" }, // parking
      { class: "fa-tree", title: "Garden" }, // garden
      { class: "fa-bolt", title: "Electric" }, // electric
      { class: "fa-bed", title: "Bed" }, // bed/bedroom
      { class: "fa-lightbulb", title: "Light" }, // lighting
      { class: "fa-water", title: "Water" }, // water
      { class: "fa-fire", title: "Fire" }, // fire/heating
      { class: "fa-car", title: "Car" }, // car/vehicle
      { class: "fa-sun", title: "Sun" }, // sun/weather
      { class: "fa-wind", title: "Wind" }, // wind/ventilation
      { class: "fa-plug", title: "Plug" }, // power plug
      { class: "fa-door-closed", title: "Door" }, // door
      { class: "fa-house", title: "House" }, // house/home
    ],
    //----------- for facts_and_features list input ----------

    //----------- for amenities list input ----------
    amenities_data_object: {
      title: "",
      available: false,
    },
    amenities_data: [
      {
        title: "",
        available: false,
      },
    ],
    //----------- for amenities list input ----------

    //----------- for floor_plan list input ----------
    floor_plan_data_object: {
      floor_number: "",
      description: "",
      image: "",
    },
    floor_plan_data: [
      {
        floor_number: "",
        description: "",
        image: "",
      },
    ],

    number_of_floors: [
      { text: "First Floor", number: 1 },
      { text: "Second Floor", number: 2 },
      { text: "Third Floor", number: 3 },
      { text: "Fourth Floor", number: 4 },
      { text: "Fifth Floor", number: 5 },
      { text: "Sixth Floor", number: 6 },
      { text: "Seventh Floor", number: 7 },
      { text: "Eighth Floor", number: 8 },
      { text: "Ninth Floor", number: 9 },
      { text: "Tenth Floor", number: 10 },
      { text: "Eleventh Floor", number: 11 },
      { text: "Twelfth Floor", number: 12 },
      { text: "Thirteenth Floor", number: 13 },
      { text: "Fourteenth Floor", number: 14 },
      { text: "Fifteenth Floor", number: 15 },
      { text: "Sixteenth Floor", number: 16 },
      { text: "Seventeenth Floor", number: 17 },
      { text: "Eighteenth Floor", number: 18 },
      { text: "Nineteenth Floor", number: 19 },
      { text: "Twentieth Floor", number: 20 },
    ],
    //----------- for floor_plan list input ----------

    //----------- for floor_plan_details list input ----------
    floor_plan_details_data_object: {
      title: "",
      description: "",
    },
    floor_plan_details_data: [
      {
        title: "",
        description: "",
      },
    ],
    //----------- for floor_plan_details list input ----------

    errors: [],
  }),
  created: async function () {
    let id = (this.param_id = this.$route.params.id);
    this.reset_fields();
    if (id) {
      this.set_fields(id);
    }
    // get all property groups and categories for select options
    this.get_all_property_group();
    this.get_all_property_category();
  },
  methods: {
    ...mapActions(store, {
      create: "create",
      update: "update",
      details: "details",
      get_all: "get_all",
      set_only_latest_data: "set_only_latest_data",
    }),
    reset_fields: function () {
      this.form_fields.forEach((item) => {
        item.value = "";
      });
    },
    set_fields: async function (id) {
      this.param_id = id;
      await this.details(id);
      if (this.item) {
        this.form_fields.forEach((field, index) => {
          Object.entries(this.item).forEach((value) => {
            if (field.name == value[0]) {
              this.form_fields[index].value = value[1];
            }

            // Set summernote content for property_detail
            if (
              field.name == "property_detail" &&
              value[0] == "property_detail"
            ) {
              $("#property_detail").summernote("code", value[1]);
            }

            // Set summernote content for property_description
            if (
              field.name == "property_description" &&
              value[0] == "property_description"
            ) {
              $("#property_description").summernote("code", value[1]);
            }
          });
        });
      }
    },

    submitHandler: async function ($event) {
      this.set_only_latest_data(true);
      if (this.param_id) {
        this.setSummerEditor();
        let response = await this.update($event);
        // await this.get_all();
        if ([200, 201].includes(response.status)) {
          window.s_alert("Data successfully updated");
          this.$router.push({ name: `Details${this.setup.route_prefix}` });
        }
      } else {
        this.setSummerEditor();
        let response = await this.create($event);
        // await this.get_all();
        if ([200, 201].includes(response.status)) {
          window.s_alert("Data Successfully Created");
          this.$router.push({ name: `All${this.setup.route_prefix}` });
        }
      }
    },
    setSummerEditor() {
      // Set property_detail summernote content
      var markupStr = $("#property_detail").summernote("code");
      var target = document.createElement("input");
      target.setAttribute("name", "property_detail");
      target.value = markupStr;
      document.getElementById("property_detail").appendChild(target);

      // Set property_description summernote content
      var markupStr = $("#property_description").summernote("code");
      var target = document.createElement("input");
      target.setAttribute("name", "property_description");
      target.value = markupStr;
      document.getElementById("property_description").appendChild(target);
    },

    //add row for json data
    add_row: function (field_name) {
      if (field_name === "facts_and_features") {
        this.facts_and_features_data.push({
          ...this.facts_and_features_data_object,
        });
      } else if (field_name === "amenities") {
        this.amenities_data.push({ ...this.amenities_data_object });
      } else if (field_name === "floor_plan") {
        this.floor_plan_data.push({ ...this.floor_plan_data_object });
      } else if (field_name === "floor_plan_details") {
        this.floor_plan_details_data.push({
          ...this.floor_plan_details_data_object,
        });
      }
    },
    //delete row for json data
    delete_row(field_name, index) {
      if (field_name === "facts_and_features") {
        if (this.facts_and_features_data.length < 2) {
          console.error("cant delete first row");
          return;
        }
        this.facts_and_features_data.splice(index, 1);
      } else if (field_name === "amenities") {
        if (this.amenities_data.length < 2) {
          console.error("cant delete first row");
          return;
        }
        this.amenities_data.splice(index, 1);
      } else if (field_name === "floor_plan") {
        if (this.floor_plan_data.length < 2) {
          console.error("cant delete first row");
          return;
        }
        this.floor_plan_data.splice(index, 1);
      } else if (field_name === "floor_plan_details") {
        if (this.floor_plan_details_data.length < 2) {
          console.error("cant delete first row");
          return;
        }
        this.floor_plan_details_data.splice(index, 1);
      }
    },
    //validation for social link empty data
    validate_data: function () {
      this.errors = [];
      let valid = true;

      // facts_and_features json data validation
      this.errors["facts_and_features"] = [];
      this.facts_and_features_data.forEach((facts_and_features, index) => {
        let facts_and_featuresErrors = {};

        // Validate icon field
        if (!facts_and_features.icon) {
          facts_and_featuresErrors.icon = "icon is required";
          valid = false;
        }
        // Validate title field
        if (!facts_and_features.title) {
          facts_and_featuresErrors.title = "Title is required";
          valid = false;
        }
        // Validate description field
        if (!facts_and_features.description) {
          facts_and_featuresErrors.description = "description is required";
          valid = false;
        }

        this.errors["facts_and_features"][index] = facts_and_featuresErrors;
      });

      // amenities json data validation
      this.errors["amenities"] = [];
      this.amenities_data.forEach((amenities, index) => {
        let amenitiesErrors = {};

        // Validate title field
        if (!amenities.title) {
          amenitiesErrors.title = "title is required";
          valid = false;
        }
        // Validate available field
        if (!amenities.available) {
          amenitiesErrors.available = "available is required";
          valid = false;
        }

        this.errors["amenities"][index] = amenitiesErrors;
      });

      // floor_plan json data validation
      this.errors["floor_plan"] = [];
      this.floor_plan_data.forEach((floor_plan, index) => {
        let floor_planErrors = {};

        // Validate floor_number field
        if (!floor_plan.floor_number) {
          floor_planErrors.floor_number = "floor_number is required";
          valid = false;
        }
        // Validate description field
        if (!floor_plan.description) {
          floor_planErrors.description = "description is required";
          valid = false;
        }
        // Validate image field
        if (!floor_plan.image) {
          floor_planErrors.image = "image is required";
          valid = false;
        }

        this.errors["floor_plan"][index] = floor_planErrors;
      });

      // floor_plan json data validation
      this.errors["floor_plan_details"] = [];
      this.floor_plan_details_data.forEach((floor_plan_details, index) => {
        let floor_plan_detailsErrors = {};

        // Validate title field
        if (!floor_plan_details.title) {
          floor_plan_detailsErrors.title = "title is required";
          valid = false;
        }
        // Validate description field
        if (!floor_plan_details.description) {
          floor_plan_detailsErrors.description = "description is required";
          valid = false;
        }

        this.errors["floor_plan_details"][index] = floor_plan_detailsErrors;
      });

      // Log errors for debugging
      console.log(this.errors);

      if (!valid) {
        console.error("Validation failed");
        return false;
      }

      return true;
    },

    get_all_property_group: async function () {
      let response = await axios.get("property-groups?get_all=1");
      if (response.data.status == "success") {
        response = response.data.data;
        this.form_fields[1].data_list = [];
        response.forEach((item) => {
          let dataList = {};
          dataList.label = item.name;
          dataList.value = item.id;
          this.form_fields[1].data_list.push(dataList);
        });
      }
    },
    get_all_property_category: async function () {
      let response = await axios.get("property-categories?get_all=1");
      if (response.data.status == "success") {
        response = response.data.data;
        this.form_fields[2].data_list = [];
        response.forEach((item) => {
          let dataList = {};
          dataList.label = item.name;
          dataList.value = item.id;
          this.form_fields[2].data_list.push(dataList);
        });
      }
    },

    onImageChange(event, index) {
      const file = event.target.files[0];
      if (file) {
        // store the file for submission
        this.floor_plan_data[index].image = file;

        // create base64 preview
        const reader = new FileReader();
        reader.onload = (e) => {
          this.floor_plan_data[index].image_preview = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    },
  },

  computed: {
    ...mapState(store, {
      item: "item",
    }),
  },
};
</script>
<style>
.image_preview {
  width: 40px;
  height: 40px;
  margin-left: 30px;
  object-fit: cover;
}
</style>

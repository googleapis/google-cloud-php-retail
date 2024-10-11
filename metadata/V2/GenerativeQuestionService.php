<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/generative_question_service.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class GenerativeQuestionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\GenerativeQuestion::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/cloud/retail/v2/generative_question_service.protogoogle.cloud.retail.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto0google/cloud/retail/v2/generative_question.proto google/protobuf/field_mask.proto"�
-UpdateGenerativeQuestionsFeatureConfigRequestj
#generative_questions_feature_config (28.google.cloud.retail.v2.GenerativeQuestionsFeatureConfigB�A4
update_mask (2.google.protobuf.FieldMaskB�A"d
*GetGenerativeQuestionsFeatureConfigRequest6
catalog (	B%�A�A
retail.googleapis.com/Catalog"]
$ListGenerativeQuestionConfigsRequest5
parent (	B%�A�A
retail.googleapis.com/Catalog"~
%ListGenerativeQuestionConfigsResponseU
generative_question_configs (20.google.cloud.retail.v2.GenerativeQuestionConfig"�
%UpdateGenerativeQuestionConfigRequestY
generative_question_config (20.google.cloud.retail.v2.GenerativeQuestionConfigB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
+BatchUpdateGenerativeQuestionConfigsRequest5
parent (	B%�A�A
retail.googleapis.com/CatalogT
requests (2=.google.cloud.retail.v2.UpdateGenerativeQuestionConfigRequestB�A"�
,BatchUpdateGenerativeQuestionConfigsResponseZ
generative_question_configs (20.google.cloud.retail.v2.GenerativeQuestionConfigB�A2�
GenerativeQuestionService�
&UpdateGenerativeQuestionsFeatureConfigE.google.cloud.retail.v2.UpdateGenerativeQuestionsFeatureConfigRequest8.google.cloud.retail.v2.GenerativeQuestionsFeatureConfig"��A/generative_questions_feature_config,update_mask����2m/v2/{generative_questions_feature_config.catalog=projects/*/locations/*/catalogs/*}/generativeQuestionFeature:#generative_questions_feature_config�
#GetGenerativeQuestionsFeatureConfigB.google.cloud.retail.v2.GetGenerativeQuestionsFeatureConfigRequest8.google.cloud.retail.v2.GenerativeQuestionsFeatureConfig"[�Acatalog���KI/v2/{catalog=projects/*/locations/*/catalogs/*}/generativeQuestionFeature�
ListGenerativeQuestionConfigs<.google.cloud.retail.v2.ListGenerativeQuestionConfigsRequest=.google.cloud.retail.v2.ListGenerativeQuestionConfigsResponse"S�Aparent���DB/v2/{parent=projects/*/locations/*/catalogs/*}/generativeQuestions�
UpdateGenerativeQuestionConfig=.google.cloud.retail.v2.UpdateGenerativeQuestionConfigRequest0.google.cloud.retail.v2.GenerativeQuestionConfig"��A&generative_question_config,update_mask���{2]/v2/{generative_question_config.catalog=projects/*/locations/*/catalogs/*}/generativeQuestion:generative_question_config�
$BatchUpdateGenerativeQuestionConfigsC.google.cloud.retail.v2.BatchUpdateGenerativeQuestionConfigsRequestD.google.cloud.retail.v2.BatchUpdateGenerativeQuestionConfigsResponse"j�Aparent,requests���R"M/v2/{parent=projects/*/locations/*/catalogs/*}/generativeQuestion:batchUpdate:*I�Aretail.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.retail.v2BGenerativeQuestionServiceProtoPZ2cloud.google.com/go/retail/apiv2/retailpb;retailpb�RETAIL�Google.Cloud.Retail.V2�Google\\Cloud\\Retail\\V2�Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

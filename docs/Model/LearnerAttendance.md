# LearnerAttendance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) assigned to uniquely identify this attendance record. | 
**learner_personal_ref_id** | **string** | The ID (GUID) of the learner for which this attendance mark is recorded. | 
**school_info_ref_id** | **string** | The school where the attendance mark was taken. | 
**attendance_date** | [**\DateTime**](Date.md) | The date of the attendance period. | 
**time_in** | **string** | The time when the learner began the attendance period. | [optional] 
**start_time** | **string** | The time the attendance period started. StartTime is required when this object represents a lesson | [optional] 
**finish_time** | **string** | The time the attendance period finished. | [optional] 
**session** | **string** | The session within which this attendance mark applies (e.g. AM/PM). Session is required when StartTime is not specified and the object refers to a session attendance mark (i.e. AttendanceDomain is session). | [optional] 
**session_label** | **string** | A label associated with the session to further describe the session, when applicable. | [optional] 
**attendance_domain** | **string** | The attendance type. | 
**attendance_code** | **string** | The attendance mark/code. | 
**attendance_note** | **string** | Additional comments. Required when record is specified as a correction. | [optional] 
**record_timestamp** | [**\DateTime**](\DateTime.md) | The date/time when recorded. When more than one record exists using the same RefId, the record with the latest timestamp is assumed to be the most current. This is possible when a record is republished due to corrections. | [optional] 
**input_source** | **string** | The source of the attendance record data. Could be Workforce member, biometric device, or other. | 
**workforce_personal_ref_id** | **string** | The ID (GUID) of the staff member responsible for recording this attendance information. | [optional] 
**school_group_ref_id** | **string** | The ID (GUID) of the group that this attendance applies to. Useful when the attendance period corresponds to a lesson time. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


